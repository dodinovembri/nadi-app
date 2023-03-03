<?php

namespace App\Controllers\Frontend;

use App\Models\ConfigurationModel;

class GetStartedController extends BaseController
{
    public function index()
    {
        $configuration = new ConfigurationModel();
        $data['config'] = $configuration->get()->getFirstRow();

        return view('frontend/get_started/index', $data);
    }
}
