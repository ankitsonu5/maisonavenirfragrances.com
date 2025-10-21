<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\BaseController;
use App\Http\Requests\ServiceItemRequest;
use App\Models\Admin\ServiceItem;
use App\Traits\UpdatedTrait;
use Illuminate\Http\Request;

class ServiceItemController extends BaseController
{
    protected $model, $module;
    use UpdatedTrait;
    public function __construct(ServiceItem $model)
    {
        parent::__construct($model, 'serviceitem');
    }

    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $query = $this->model::query();
        $data = $query->orderBy('order',)->paginate(5);
        return view('admin.' . $this->module . '.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(ServiceItem $service)
    {
        return view('admin.' . $this->module . '.create', ['row' => $service]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ServiceItemRequest $request)
    {

        $formInput = $request->all();
        $formInput['image'] = $this->verifyAndStoreImage($request, 'image', $this->module);
        $serviceitem = $this->model::create($formInput);
        return $this->redirectAfterSave($request->FormButton, $serviceitem->id);
    }

    /**
     * Display the specified resource.
     */
    public function show(ServiceItem $serviceitem)
    {
        return view('admin.' . $this->module . '.show', ['row' => $serviceitem]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(ServiceItem $serviceitem)
    {
        return view('admin.' . $this->module . '.edit', ['row' => $serviceitem]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(ServiceItemRequest $request, ServiceItem $serviceitem)
    {
        $formInput = $request->all();
        $formInput['image'] = $this->verifyAndStoreImage($request, 'image', $this->module);
        $serviceitem->update($formInput);
        return $this->redirectAfterSave($request->FormButton, $serviceitem->id);
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request, ServiceItem $service)
    {
        $service->delete();
        $request->flash('success', 'Deleted successfully');
        return back();
    }
}
