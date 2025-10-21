<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\BaseController;
use App\Models\Admin\Ingredients;
use App\Models\Admin\Product;
use App\Traits\UpdatedTrait;
use Illuminate\Http\Request;

class IngredientsController extends BaseController
{
    protected $model, $module;
    use UpdatedTrait;
    public function __construct(Ingredients $model)
    {
        parent::__construct($model, 'ingredients');
    }

    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $query = $this->model::query();
        $data = $query->orderBy('order',)->paginate(50);
        return view('admin.' . $this->module . '.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Ingredients $ingredients)
    {
        $products = Product::pluck('name', 'id'); // Fetch all products
        return view('admin.' . $this->module . '.create', ['row' => $ingredients, 'products' => $products]);
    }


    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $formInput = $request->all();
        $formInput['image'] = $this->verifyAndStoreImage($request, 'image', $this->module);

        $ingredient = $this->model::create($formInput);

        // Attach selected products
        if ($request->has('products')) {
            $ingredient->products()->sync($request->products);
        }

        return $this->redirectAfterSave($request->FormButton, $ingredient->id);
    }

    /**
     * Display the specified resource.
     */
    public function show(Ingredients $ingredients)
    {
        return view('admin.' . $this->module . '.show', ['row' => $ingredients]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $ingredients = Ingredients::find($id);
        $products = Product::pluck('name', 'id'); // Fetch all products
        $selectedProducts = $ingredients->products->pluck('id')->toArray(); // Fetch associated products
        return view('admin.' . $this->module . '.edit', [
            'row' => $ingredients,
            'products' => $products,
            'selectedProducts' => $selectedProducts
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $ingredients = Ingredients::find($id);
        $formInput = $request->all();
        $formInput['image'] = $this->verifyAndStoreImage($request, 'image', $this->module);

        $ingredients->update($formInput);

        // Sync selected products
        if ($request->has('products')) {
            $ingredients->products()->sync($request->products);
        }

        return $this->redirectAfterSave($request->FormButton, $ingredients->id);
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request, $id)
    {
        Ingredients::find($id)->delete();
        $request->flash('success', 'Deleted successfully');
        return back();
    }
}
