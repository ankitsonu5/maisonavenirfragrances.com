<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\BaseController;
use App\Models\Admin\Category;
use App\Traits\UpdatedTrait;
use Illuminate\Http\Request;

class CategoryController extends BaseController
{
    protected $model, $module;
    use UpdatedTrait;
    public function __construct(Category $model)
    {
        parent::__construct($model, 'category');
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
    public function create(Category $category)
    {

        return view('admin.' . $this->module . '.create', ['row' => $category]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $formInput = $request->all();
        $category = $this->model::create($formInput);
        return $this->redirectAfterSave($request->FormButton, $category->id);
    }

    /**
     * Display the specified resource.
     */
    public function show(Category $category)
    {
        return view('admin.' . $this->module . '.show', ['row' => $category]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Category $category)
    {
      
        return view('admin.' . $this->module . '.edit', ['row' => $category]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Category $category)
    {
        $formInput = $request->all();
        $category->update($formInput);
        return $this->redirectAfterSave($request->FormButton, $category->id);
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request, Category $category)
    {
        $category->delete();
        $request->flash('success', 'Deleted successfully');
        return back();
    }
}
