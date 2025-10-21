<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin\Admin;
use Illuminate\Http\Request;
use App\Traits\RedirectTrait;
use App\Traits\StoreImageTrait;
use Exception;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\View as FacadesView;
use Spatie\Permission\Models\Role;
use Illuminate\Support\Arr;

class EmployeeController extends Controller
{
    private $module, $model;
    use StoreImageTrait, RedirectTrait;
    public function __construct(Admin $model)
    {
        $this->model = $model;
        $this->module = 'employees';
        FacadesView::share('module', $this->module);
        $this->middleware('permission:employee-list|employee-create|employee-edit|employee-delete|employee-export', ['only' => ['index', 'store']]);
        $this->middleware('permission:employee-create', ['only' => ['create', 'store']]);
        $this->middleware('permission:employee-edit', ['only' => ['edit', 'update']]);
        $this->middleware('permission:employee-delete', ['only' => ['destroy']]);
        $this->middleware('permission:employee-import', ['only' => ['importCSV']]);
        $this->middleware('permission:employee-list', ['only' => ['index']]);
    }



    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {


        $Export = $request->input('from');
        if ($Export) {
            $from = $request->input('from') . ' 00:00:00';
            $to = $request->input('to') . ' 00:00:00';
            $data = $this->model::whereBetween('created_at', [$from, $to])->get(); // आपके डेटा की वास्तविक प्राप्ति के लिए आप अपनी विशिष्ट क्वेरी का उपयोग करें
            return  $this->model::downloadCSV($data);
        }
        $serch = $request->input('serch');

        $query = $this->model::query();
        if ($serch) {
            $query->where('name', 'like', "%{$serch}%")
                ->orwhere('email', 'like', "%{$serch}%");
        }
        $data = $query->orderByDESC('id')->paginate(20);
        return view('admin.' . $this->module . '.index', compact('data'));
    }


    /**
     * Show the form for creating a new resource.
     */
    public function create(Admin $data)
    {
        $roles = Role::pluck('name', 'name')->all();
        return view('admin.' . $this->module . '.create', compact(['row' => 'data', 'roles' => 'roles']));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required|email|unique:admins,email',
            'password' => 'required|same:confirm-password',
            'roles' => 'required'
        ]);
        $input = $request->all();
        $input['password'] = Hash::make($input['password']);

        $employee = $this->model::create($input);
        $employee->assignRole($request->input('roles'));
        return $this->redirectAfterSave($request->FormButton, $employee->id);
    }

    /**
     * Display the specified resource.
     */
    public function show($employee)
    {
        $employee = $this->model::find($employee);
        return view('Admni.employees.show', compact('employee'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($employee)
    {
        $employee = $this->model::find($employee);
        $roles = Role::pluck('name', 'name')->all();
        $employeeRole = $employee->roles->pluck('name', 'name')->all();
        return view('admin.' . $this->module . '.edit', compact('employee', 'roles', 'employeeRole'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,  $employee)
    {
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required|email|unique:admins,email,' . $employee,
            'password' => 'same:confirm-password',
            'roles' => 'required'
        ]);

        $input = $request->all();
        if (!empty($input['password'])) {
            $input['password'] = Hash::make($input['password']);
        } else {
            $input = Arr::except($input, array('password'));
        }

        $employee = $this->model::find($employee);
        $employee->update($input);

        DB::table('model_has_roles')->where('model_id', $employee->id)->delete();
        $employee->assignRole($request->input('roles'));
        return $this->redirectAfterSave($request->FormButton, $employee->id);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request, $id)
    {
        $this->model::find($id)->delete();
        $request->session()->flash('success', ' User  Deleted successfully');
        return back();
    }
}
