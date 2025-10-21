<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\BaseController;
use App\Models\Admin\FragranceFamily;
use App\Models\Admin\Product;
use App\Traits\UpdatedTrait;
use Illuminate\Http\Request;

class FragranceFamilyController extends BaseController
{
    protected $model, $module;
    use UpdatedTrait;
    public function __construct(FragranceFamily $model)
    {
        parent::__construct($model, 'fragrancefamily');
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
    public function create(FragranceFamily $fragrancefamily)
    {
        $products = Product::pluck('name', 'id'); // Fetch all products
        return view('admin.' . $this->module . '.create', [
            'row' => $fragrancefamily,
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

        $fragrancefamily = $this->model::create($formInput);

        // Attach products to fragrance family
        if ($request->has('products')) {
            $fragrancefamily->products()->sync($request->products);
        }

        return $this->redirectAfterSave($request->FormButton, $fragrancefamily->id);
    }

    /**
     * Display the specified resource.
     */
    public function show(FragranceFamily $fragrancefamily)
    {
        return view('admin.' . $this->module . '.show', ['row' => $fragrancefamily]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $fragrancefamily = FragranceFamily::find($id);
        $products = Product::pluck('name', 'id'); // Fetch all products

        $selectedProducts = $fragrancefamily->products->pluck('id')->toArray(); // Associated products

        return view('admin.' . $this->module . '.edit', [
            'row' => $fragrancefamily,
            'products' => $products,
            'selectedProducts' => $selectedProducts,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $fragrancefamily = FragranceFamily::find($id);
        $formInput = $request->all();
        $formInput['image'] = $this->verifyAndStoreImage($request, 'image', $this->module);

        $fragrancefamily->update($formInput);

        // Sync products
        if ($request->has('products')) {
            $fragrancefamily->products()->sync($request->products);
        }

        return $this->redirectAfterSave($request->FormButton, $fragrancefamily->id);
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request, $id)
    {
        FragranceFamily::find($id)->delete();
        $request->flash('success', 'Deleted successfully');
        return back();
    }
}
