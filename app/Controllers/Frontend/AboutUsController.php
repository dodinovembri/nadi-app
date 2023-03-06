<?php

namespace App\Controllers\Frontend;

use App\Models\ConfigModel;

class AboutUsController extends BaseController
{
    public function index()
    {
        $configuration = new ConfigModel();
        $data['config'] = $configuration->get()->getFirstRow();

        return view('frontend/about_us/index', $data);
    }
}
