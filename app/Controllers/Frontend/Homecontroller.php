<?php

namespace App\Controllers\Frontend;

use App\Models\ConfigurationModel;
use App\Models\ServiceModel;
use App\Models\FeatureModel;
use App\Models\SubscribeFeatureModel;
use App\Models\BrandModel;
use App\Models\SocialMediaModel;

class Homecontroller extends BaseController
{
    public function index()
    {
        $configuration = new ConfigurationModel();
        $service = new ServiceModel();
        $feature = new FeatureModel();
        $subscribe_feature = new SubscribeFeatureModel();
        $brand = new BrandModel();
        $social_media = new SocialMediaModel();

        $data['config'] = $configuration->get()->getFirstRow();
        $data['services'] = $service->get()->getResult();
        $data['features'] = $feature->get()->getResult();
        $data['subscribe_features'] = $subscribe_feature->get()->getResult();
        $data['brands'] = $brand->get()->getResult();
        $data['social_medias'] = $social_media->get()->getResult();

        return view('frontend/home/index', $data);
    }
}
