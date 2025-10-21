<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\BaseController;
use App\Models\Admin\Mood;
use App\Models\Admin\Product;
use App\Traits\UpdatedTrait;
use Illuminate\Http\Request;

class MoodController extends BaseController
{
    protected $model, $module;
    use UpdatedTrait;
    public function __construct(Mood $model)
    {
        parent::__construct($model, 'mood');
    }

    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $query = $this->model::query();
        $data = $query->orderBy('order', )->paginate(50);
        return view('admin.' . $this->module . '.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Mood $mood)
    {
        $products = Product::pluck('name', 'id'); // Fetch all products
        return view('admin.' . $this->module . '.create', ['row' => $mood, 'products' => $products,]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $formInput = $request->all();
        $formInput['image'] = $this->verifyAndStoreImage($request, 'image', $this->module);
        $formInput['image_new'] = $this->verifyAndStoreImage($request, 'image_new', $this->module);
        $model = $this->model::create($formInput);
        // Attach selected products
        if ($request->has('products')) {
            $model->products()->sync($request->products);
        }
        return $this->redirectAfterSave($request->FormButton, $model->id);
    }

    /**
     * Display the specified resource.
     */
    public function show(Mood $mood)
    {
        return view('admin.' . $this->module . '.show', ['row' => $mood]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Mood $mood)
    {
        $products = Product::pluck('name', 'id'); // Fetch all products
        $selectedProducts = $mood->products->pluck('id')->toArray(); // Get associated products

        return view('admin.' . $this->module . '.edit', [
            'row' => $mood,
            'products' => $products,
            'selectedProducts' => $selectedProducts,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Mood $mood)
    {
        $formInput = $request->all();
        $formInput['image'] = $this->verifyAndStoreImage($request, 'image', $this->module);
        $formInput['image_new'] = $this->verifyAndStoreImage($request, 'image_new', $this->module);

        $mood->update($formInput);
        // Sync products
        if ($request->has('products')) {
            $mood->products()->sync($request->products);
        }

        return $this->redirectAfterSave($request->FormButton, $mood->id);
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request, Mood $mood)
    {
        $mood->delete();
        $request->flash('success', 'Deleted successfully');
        return back();
    }
}
