<?php

namespace App\Controllers\Frontend;

use App\Models\ConfigModel;
use App\Models\ConfigMenuModel;
use App\Models\ServiceModel;
use App\Models\FeatureModel;
use App\Models\BrandModel;

class HomeController extends BaseController
{
    public function index()
    {
        // config
        $config = new ConfigModel();
        $data['config'] = $config->get()->getFirstRow();
        // config menu
        $config_menu = new ConfigMenuModel();
        $data['config_menu'] = $config_menu->get()->getFirstRow();
        // service
        $service = new ServiceModel();
        $data['services'] = $service->where('status', 1)->get()->getResult();
        // feature
        $feature = new FeatureModel();
        $data['features'] = $feature->where('status', 1)->get()->getResult();
        // brand
        $brand = new BrandModel();
        $data['brands'] = $brand->where('status', 1)->get()->getResult();

        return view('frontend/home/index', $data);
    }
}
