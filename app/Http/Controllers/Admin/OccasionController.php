<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\BaseController;
use App\Models\Admin\Occasion;
use App\Models\Admin\Product;
use App\Traits\UpdatedTrait;
use Illuminate\Http\Request;

class OccasionController extends BaseController
{
    protected $model, $module;
    use UpdatedTrait;
    public function __construct(Occasion $model)
    {
        parent::__construct($model, 'occasion');
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
    public function create(Occasion $occasion)
    {
        $products = Product::pluck('name', 'id'); // Fetch all products
        return view('admin.' . $this->module . '.create', ['row' => $occasion, 'products' => $products]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $formInput = $request->all();
        $formInput['image'] = $this->verifyAndStoreImage($request, 'image', $this->module);
        $formInput['image_new'] = $this->verifyAndStoreImage($request, 'image_new', $this->module);
        $occasion = $this->model::create($formInput);
        // Attach selected products
        if ($request->has('products')) {
            $occasion->products()->sync($request->products);
        }
        return $this->redirectAfterSave($request->FormButton, $occasion->id);
    }


    /**
     * Display the specified resource.
     */
    public function show(Occasion $occasion)
    {
        return view('admin.' . $this->module . '.show', ['row' => $occasion]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Occasion $occasion)
    {
        $products = Product::pluck('name', 'id'); // Fetch all products
        $selectedProducts = $occasion->products->pluck('id')->toArray(); // Get associated products

        return view('admin.' . $this->module . '.edit', [
            'row' => $occasion,
            'products' => $products,
            'selectedProducts' => $selectedProducts,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Occasion $occasion)
    {
        $formInput = $request->all();
        $formInput['image'] = $this->verifyAndStoreImage($request, 'image', $this->module);
        $formInput['image_new'] = $this->verifyAndStoreImage($request, 'image_new', $this->module);

        $occasion->update($formInput);
        // Sync products
        if ($request->has('products')) {
            $occasion->products()->sync($request->products);
        }

        return $this->redirectAfterSave($request->FormButton, $occasion->id);
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request, Occasion $occasion)
    {
        $occasion->delete();
        $request->flash('success', 'Deleted successfully');
        return back();
    }
}
