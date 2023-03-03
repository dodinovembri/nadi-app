<?php

namespace App\Controllers\Frontend;

use App\Models\ConfigurationModel;
use App\Models\ServiceModel;
use App\Models\FeatureModel;
use App\Models\BrandModel;

class HomeController extends BaseController
{
    public function index()
    {
        $configuration = new ConfigurationModel();
        $service = new ServiceModel();
        $feature = new FeatureModel();
        $brand = new BrandModel();

        $data['config'] = $configuration->get()->getFirstRow();
        $data['services'] = $service->get()->getResult();
        $data['features'] = $feature->get()->getResult();
        $data['brands'] = $brand->get()->getResult();

        return view('frontend/home/index', $data);
    }
}
