<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\BaseController;
use App\Models\LayerWith;
use App\Models\Admin\Product;
use Illuminate\Http\Request;
use App\Traits\UpdatedTrait;

class LayerWithController extends BaseController
{
    protected $model, $module;
    use UpdatedTrait;

    public function __construct(LayerWith $model)
    {
        parent::__construct($model, 'layer-withs');
    }

    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $query = $this->model::query();
        $data = $query->orderBy('id', 'desc')->paginate(50);
        return view('admin.' . $this->module . '.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $products = Product::all();
        return view('admin.' . $this->module . '.create', compact('products'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'product_id' => 'required|exists:products,id',
            'layer_with_one' => 'nullable|exists:products,id|different:product_id',
            'layer_with_two' => 'nullable|exists:products,id|different:product_id',
            'status' => 'required|in:1,0',
        ]);

        LayerWith::create([
            'product_id' => $request->product_id,
            'layer_with_one' => $request->layer_with_one,
            'layer_with_two' => $request->layer_with_two,
            'status' => $request->status,
        ]);

        return redirect()->route('admin.layer-withs.index')->with('success', 'Layer With created successfully!');
    }


    /**
     * Display the specified resource.
     */
    public function show(LayerWith $layerWith)
    {
        return view('admin.' . $this->module . '.show', compact('layerWith'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(LayerWith $layerWith)
    {
        $products = Product::all();
        return view('admin.' . $this->module . '.edit', compact('layerWith', 'products'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, LayerWith $layerWith)
    {
        $request->validate([
            'product_id' => 'required|exists:products,id',
            'layer_with_one' => 'nullable|exists:products,id|different:product_id',
            'layer_with_two' => 'nullable|exists:products,id|different:product_id',
            'status' => 'required|in:1,0',
        ]);

        $layerWith->update([
            'product_id' => $request->product_id,
            'layer_with_one' => $request->layer_with_one,
            'layer_with_two' => $request->layer_with_two,
            'status' => $request->status,
        ]);

        return redirect()->route('admin.layer-withs.index')->with('success', 'Layer With updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request, LayerWith $layerWith)
    {
        $layerWith->delete();
        $request->session()->flash('success', 'Deleted successfully');
        return back();
    }
}
