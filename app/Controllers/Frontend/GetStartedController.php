<?php

namespace App\Controllers\Frontend;

use App\Models\ConfigurationModel;
use App\Models\AppModel;
use App\Models\AppTypeModel;
use App\Models\ClientModel;

class GetStartedController extends BaseController
{
    public function index()
    {
        // config
        $configuration = new ConfigurationModel();
        $data['config'] = $configuration->get()->getFirstRow();
        // apps
        $app_type = new AppTypeModel();
        $data['app_types'] = $app_type->get()->getResult();

        return view('frontend/get_started/index', $data);
    }

    public function register($id)
    {
        // config
        $configuration = new ConfigurationModel();
        $data['config'] = $configuration->get()->getFirstRow();
        // apps
        $app = new AppModel();
        $data['apps'] = $app->orderBy('created_at', 'DESC')->get()->getResult();
        $data['app_id'] = $id;

        return view('frontend/get_started/register', $data);
    }

    public function store()
    {
        $client = new ClientModel();
        $check = $client->where('email', $this->request->getPost('email'))->get()->getFirstRow();
        if ($check) {
            session()->setFlashdata('info', 'Your email address has been registered. try use another email.');
            return redirect()->to(base_url('get-started/' . $this->request->getPost('app_id')));
        } else {
            $password = $this->request->getPost('password');
            $client->insert([
                'created_at' => date('Y-m-d H:i:s'),
                'app_id' => $this->request->getPost('app_id'),
                'name' => $this->request->getPost('name'),
                'email' => $this->request->getPost('email'),
                'phone_number' => $this->request->getPost('phone_number'),
                'password' => password_hash($password, PASSWORD_DEFAULT)
            ]);

            $name = explode(" ", $this->request->getPost('name'));
            $trial_domain = strtolower($name[0]);
            $data['trial_domain'] = $trial_domain;
    
            return view('frontend/get_started/redirect', $data);       
        }
    }
}
