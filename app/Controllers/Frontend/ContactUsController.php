<?php

namespace App\Controllers\Frontend;

use App\Models\ConfigModel;
use App\Models\ConfigMenuModel;

class ContactUsController extends BaseController
{
    public function index()
    {
        // config
        $configuration = new ConfigModel();
        $data['config'] = $configuration->get()->getFirstRow();
        // config menu
        $config_menu = new ConfigMenuModel();
        $data['config_menu'] = $config_menu->get()->getFirstRow();

        return view('frontend/contact_us/index', $data);
    }
}
