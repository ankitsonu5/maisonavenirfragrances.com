<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\BaseController;
use App\Models\Admin\FragranceAccord;
use App\Models\Admin\Product; // Import the Product model
use App\Traits\UpdatedTrait;
use Illuminate\Http\Request;

class FragranceAccordController extends BaseController
{
    protected $model, $module;
    use UpdatedTrait;

    public function __construct(FragranceAccord $model)
    {
        parent::__construct($model, 'fragranceaccord');
    }

    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $query = $this->model::query();
        $data = $query->orderBy('order')->paginate(50);

        return view('admin.' . $this->module . '.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(FragranceAccord $fragranceaccord)
    {
        $products = Product::pluck('name', 'id'); // Fetch all products
        return view('admin.' . $this->module . '.create', [
            'row' => $fragranceaccord,
            'products' => $products,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $formInput = $request->all();

        $formInput['image'] = $this->verifyAndStoreImage($request, 'image', $this->module);
        $fragranceaccord = $this->model::create($formInput);
        // Attach selected products
        if ($request->has('products')) {
            $fragranceaccord->products()->sync($request->products);
        }

        return $this->redirectAfterSave($request->FormButton, $fragranceaccord->id);
    }

    /**
     * Display the specified resource.
     */
    public function show(FragranceAccord $fragranceaccord)
    {
        return view('admin.' . $this->module . '.show', ['row' => $fragranceaccord]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $fragranceaccord = FragranceAccord::find($id);
        $products = Product::pluck('name', 'id'); // Fetch all products
        $selectedProducts = $fragranceaccord->products->pluck('id')->toArray(); // Get associated products

        return view('admin.' . $this->module . '.edit', [
            'row' => $fragranceaccord,
            'products' => $products,
            'selectedProducts' => $selectedProducts,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $fragranceaccord = FragranceAccord::find($id);
        $formInput = $request->all();
        $formInput['image'] = $this->verifyAndStoreImage($request, 'image', $this->module);

        $fragranceaccord->update($formInput);
        
        // Sync products
        if ($request->has('products')) {
            $fragranceaccord->products()->sync($request->products);
        }

        return $this->redirectAfterSave($request->FormButton, $fragranceaccord->id);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request, $id)
    {
        FragranceAccord::find($id)->delete();
        $request->flash('success', 'Deleted successfully');

        return back();
    }
}
