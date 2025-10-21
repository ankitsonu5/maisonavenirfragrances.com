<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\BaseController;
use App\Models\Admin\Product;
use App\Traits\UpdatedTrait;
use Illuminate\Http\Request;

class ProductController extends BaseController
{
    protected $model, $module;
    use UpdatedTrait;
    public function __construct(Product $model)
    {
        parent::__construct($model, 'product');
    }

    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $query = $this->model::query();
        $data = $query->orderBy('collection_id')->paginate(50);
        return view('admin.' . $this->module . '.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Product $product)
    {

        return view('admin.' . $this->module . '.create', ['row' => $product]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $formInput = $request->all();
        // List of image fields
        $imageFields = [
            'pakking_image',
            'image',
            'card_image',
            'maine_image',
            'left_image',
            'right_up_image',
            'right_dowen_image',
            'fragrance_icone',
            'topnote_icone',
            'heartnote_icone',
            'basenote_icone',
            'fragrance_banner',
            'topnote_banner',
            'heartnote_banner',
            'basenote_banner',
            'aqua',
            'woody',
            'floral',
            'top_icone',
            'heart_icone',
            'base_icone',
            'fragrance_banner_title',
            'topnote_banner_title',
            'heartnote_banner_title',
            'basenote_banner_title',
            'primary_image',
            'secondary_image',
            'primary_imagetwo',
            'primary_imagethree',
        ];

        // Loop through each image field to handle file upload
        foreach ($imageFields as $field) {
            $formInput[$field] = $this->verifyAndStoreImage($request, $field, $this->module);
        }

        $category = $this->model::create($formInput);
        return $this->redirectAfterSave($request->FormButton, $category->id);
    }

    /**
     * Display the specified resource.
     */
    public function show(Product $product)
    {
        return view('admin.' . $this->module . '.show', ['row' => $product]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Product $product)
    {

        return view('admin.' . $this->module . '.edit', ['row' => $product]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Product $product)
    {
        $formInput = $request->all();
        // List of image fields
        $imageFields = [
            'pakking_image',
            'image',
            'card_image',
            'maine_image',
            'left_image',
            'right_up_image',
            'right_dowen_image',
            'fragrance_icone',
            'topnote_icone',
            'heartnote_icone',
            'basenote_icone',
            'fragrance_banner',
            'topnote_banner',
            'heartnote_banner',
            'basenote_banner',
            'aqua',
            'woody',
            'floral',
            'top_icone',
            'heart_icone',
            'base_icone',
            'fragrance_banner_title',
            'topnote_banner_title',
            'heartnote_banner_title',
            'basenote_banner_title',
            'primary_image',
            'secondary_image',
            'primary_imagetwo',
            'primary_imagethree',
        ];

        // Loop through each image field to handle file upload
        foreach ($imageFields as $field) {
            $formInput[$field] = $this->verifyAndStoreImage($request, $field, $this->module);
        }
        $product->update($formInput);
        return $this->redirectAfterSave($request->FormButton, $product->id);
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request, Product $product)
    {
        $product->delete();
        $request->flash('success', 'Deleted successfully');
        return back();
    }
}
