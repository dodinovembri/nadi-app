<?php

namespace App\Controllers\Frontend;
use App\Models\ConfigurationModel;
use App\Models\SocialMediaModel;
use App\Models\AppTypeModel;
use App\Models\AppModel;

class Ourappscontroller extends BaseController
{
    public function index()
    {
        $configuration = new ConfigurationModel();
        $social_media = new SocialMediaModel();
        $app_type = new AppTypeModel();

        $data['config'] = $configuration->get()->getFirstRow();
        $data['social_medias'] = $social_media->get()->getResult();
        $data['app_types'] = $app_type->get()->getResult();

        return view('frontend/ourapps/index', $data);
    }

    public function show($code)
    {
        $configuration = new ConfigurationModel();
        $social_media = new SocialMediaModel();
        $app_type = new AppTypeModel();
        $app = new AppModel();

        $data['config'] = $configuration->get()->getFirstRow();
        $data['social_medias'] = $social_media->get()->getResult();
        $data['app_types'] = $app_type->get()->getResult();
        $data['apps'] = $app->orderBy('created_at', 'DESC')->get()->getResult();

        return view('frontend/ourapps/show', $data);
    }
}
