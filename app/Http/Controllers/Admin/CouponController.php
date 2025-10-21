<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\BaseController;
use App\Http\Requests\CouponRequest;
use App\Models\Admin\Coupon;
use App\Traits\UpdatedTrait;
use Illuminate\Http\Request;

class CouponController extends BaseController
{
    protected $model, $module;
    use UpdatedTrait;
    public function __construct(Coupon $model)
    {
        parent::__construct($model, 'coupon');
    }

    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $query = $this->model::query();
        $data = $query->orderBy('id',)->paginate(5);
        return view('admin.' . $this->module . '.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Coupon $coupon)
    {
        return view('admin.' . $this->module . '.create', ['row' => $coupon]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(CouponRequest $request)
    {
       
         $formInput = $request->all();
        $coupon = $this->model::create($formInput);
        return $this->redirectAfterSave($request->FormButton, $coupon->id);
    }

    /**
     * Display the specified resource.
     */
    public function show(  $id)
    {
        $coupon = Coupon::find($id) ;
        return view('admin.' . $this->module . '.show', ['row' => $coupon]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(  $id)
    {
        $coupon = Coupon::find($id) ;
        return view('admin.' . $this->module . '.edit', ['row' => $coupon]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(CouponRequest $request,  $id)
    {
        $coupon = Coupon::find($id) ;
        $formInput = $request->all();
        $coupon->update($formInput);
        return $this->redirectAfterSave($request->FormButton, $coupon->id);
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request,  $id)
    {
        $coupon = Coupon::find($id) ;
        return back()->with('success', 'Deleted successfully');
    }
}
