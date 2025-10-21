<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\BaseController;
use App\Models\Blog;
use App\Traits\UpdatedTrait;
use Illuminate\Http\Request;

class BlogController extends BaseController
{
    protected $model, $module;
    use UpdatedTrait;
    public function __construct(Blog $model)
    {
        parent::__construct($model, 'blog');
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
    public function create(Blog $blog)
    {

        return view('admin.' . $this->module . '.create', ['row' => $blog]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $formInput = $request->all();
        // List of image fields
        $imageFields = [
            'image',
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
    public function show(Blog $blog)
    {
        return view('admin.' . $this->module . '.show', ['row' => $blog]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Blog $blog)
    {

        return view('admin.' . $this->module . '.edit', ['row' => $blog]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Blog $blog)
    {
        $formInput = $request->all();
        // List of image fields
        $imageFields = [
            'image',
        ];

        // Loop through each image field to handle file upload
        foreach ($imageFields as $field) {
            $formInput[$field] = $this->verifyAndStoreImage($request, $field, $this->module);
        }
        $blog->update($formInput);
        return $this->redirectAfterSave($request->FormButton, $blog->id);
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request, Blog $blog)
    {
        $blog->delete();
        $request->flash('success', 'Deleted successfully');
        return back();
    }
}
