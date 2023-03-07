<?php

namespace App\Controllers\Frontend;

use App\Models\ConfigModel;
use App\Models\ConfigMenuModel;
use App\Models\AppModel;
use App\Models\AppTypeModel;
use App\Models\ClientModel;

class GetStartedController extends BaseController
{
    public function index()
    {
        // config
        $config = new ConfigModel();
        $data['config'] = $config->get()->getFirstRow();
        // config menu
        $config_menu = new ConfigMenuModel();
        $data['config_menu'] = $config_menu->get()->getFirstRow();        
        // app type
        $app_type = new AppTypeModel();
        $data['app_types'] = $app_type->where('status', 1)->get()->getResult();

        return view('frontend/get_started/index', $data);
    }

    public function register($id)
    {
        // config
        $config = new ConfigModel();
        $data['config'] = $config->get()->getFirstRow();
        // config menu
        $config_menu = new ConfigMenuModel();
        $data['config_menu'] = $config_menu->get()->getFirstRow();        
        // app
        $app = new AppModel();
        $data['apps'] = $app->where('status', 1)->orderBy('created_at', 'DESC')->get()->getResult();
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
            $app_id = $this->request->getPost('app_id');
            $data['app_id'] = $app_id;
            // client
            $client_data = $client->where('email', $this->request->getPost('email'))->get()->getFirstRow();
            $data['client_id'] = $client_data->id;

            return view('frontend/get_started/redirect', $data);       
        }
    }
}
