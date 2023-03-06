<?php

namespace App\Controllers\Frontend;

use App\Models\ConfigModel;
use App\Models\ConfigMenuModel;
use App\Models\AppTypeModel;
use App\Models\AppModel;

class OurappsController extends BaseController
{
    public function index()
    {
        // config
        $config = new ConfigModel();
        $data['config'] = $config->get()->getFirstRow();
        // config menu
        $config_menu = new ConfigMenuModel();
        $data['config_menu'] = $config_menu->get()->getFirstRow();
        // app type
        $app_type = new AppTypeModel();
        $data['app_types'] = $app_type->where('status', 1)->get()->getResult();

        return view('frontend/ourapps/index', $data);
    }

    public function show($id)
    {
        // config
        $config = new ConfigModel();
        $data['config'] = $config->get()->getFirstRow();
        // config menu
        $config_menu = new ConfigMenuModel();
        $data['config_menu'] = $config_menu->get()->getFirstRow();
        // app type
        $app_type = new AppTypeModel();
        $data['app_types'] = $app_type->where('status', 1)->get()->getResult();
        // app
        $app = new AppModel();
        $data['apps'] = $app->where('status', 1)->where('app_type_id', $id)->orderBy('created_at', 'DESC')->get()->getResult();

        return view('frontend/ourapps/show', $data);
    }
}
