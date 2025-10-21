<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\BaseController;
use App\Http\Requests\ServiceRequest;
use App\Models\Admin\Service;
use App\Traits\UpdatedTrait;
use Illuminate\Http\Request;

class ServiceController extends BaseController
{
    protected $model, $module;
    use UpdatedTrait;
    public function __construct(Service $model)
    {
        parent::__construct($model, 'service');
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
    public function create(Service $service)
    {

        return view('admin.' . $this->module . '.create', ['row' => $service]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ServiceRequest $request)
    {
        $formInput = $request->all();
        $formInput['image'] = $this->verifyAndStoreImage($request, 'image', $this->module);
        $Service = $this->model::create($formInput);
        return $this->redirectAfterSave($request->FormButton, $Service->id);
    }

    /**
     * Display the specified resource.
     */
    public function show(Service $service)
    {
        return view('admin.' . $this->module . '.show', ['row' => $service]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Service $service)
    {
      
        return view('admin.' . $this->module . '.edit', ['row' => $service]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(ServiceRequest $request, Service $service)
    {
        $formInput = $request->all();
        $formInput['image'] = $this->verifyAndStoreImage($request, 'image', $this->module);
        $service->update($formInput);
        return $this->redirectAfterSave($request->FormButton, $service->id);
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request, Service $service)
    {
        $service->delete();
        $request->flash('success', 'Deleted successfully');
        return back();
    }
}
