<?php

namespace App\Controllers\Frontend;

use App\Models\ConfigurationModel;

class ContactUsController extends BaseController
{
    public function index()
    {        
        $configuration = new ConfigurationModel();
        $data['config'] = $configuration->get()->getFirstRow();

        return view('frontend/contact_us/index', $data);
    }
}
