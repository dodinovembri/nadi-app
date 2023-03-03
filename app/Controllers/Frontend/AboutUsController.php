<?php

namespace App\Controllers\Frontend;

use App\Models\ConfigurationModel;

class AboutUsController extends BaseController
{
    public function index()
    {
        $configuration = new ConfigurationModel();
        $data['config'] = $configuration->get()->getFirstRow();

        return view('frontend/about_us/index', $data);
    }
}
