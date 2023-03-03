<?php

namespace App\Controllers\Frontend;
use App\Models\ConfigurationModel;
use App\Models\AppTypeModel;
use App\Models\AppModel;

class OurappsController extends BaseController
{
    public function index()
    {
        $configuration = new ConfigurationModel();
        $app_type = new AppTypeModel();

        $data['config'] = $configuration->get()->getFirstRow();
        $data['app_types'] = $app_type->get()->getResult();

        return view('frontend/ourapps/index', $data);
    }

    public function show($code)
    {
        $configuration = new ConfigurationModel();
        $app_type = new AppTypeModel();
        $app = new AppModel();

        $data['config'] = $configuration->get()->getFirstRow();
        $data['app_types'] = $app_type->get()->getResult();
        $data['apps'] = $app->orderBy('created_at', 'DESC')->get()->getResult();

        return view('frontend/ourapps/show', $data);
    }
}
