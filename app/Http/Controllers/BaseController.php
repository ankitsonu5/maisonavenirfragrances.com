<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\View as FacadesView;
use App\Traits\RedirectTrait;
use App\Traits\StoreImageTrait;

class BaseController extends Controller
{
    protected $model;
    protected $module;
    use StoreImageTrait, RedirectTrait;
    public function __construct($model, $module)
    {
        $this->model = $model;
        $this->module = $module;
        FacadesView::share('module', $this->module);
        $this->setPermissions();
    }

    protected function setPermissions()
    {
        $permissions = [
            'list' => 'index',
            'create' => ['create', 'store'],
            'edit' => ['edit', 'update'],
            'delete' => 'destroy'
        ];
        foreach ($permissions as $permission => $actions) {
            $this->middleware("permission:{$this->module}-{$permission}")->only($actions);
        }
    }
}
