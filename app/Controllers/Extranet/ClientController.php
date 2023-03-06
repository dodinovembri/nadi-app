<?php

namespace App\Controllers\Extranet;

use App\Models\ConfigModel;
use App\Models\ClientModel;
use App\Models\AppModel;

class ClientController extends BaseController
{
    public function index()
    {
        // config
        $config = new ConfigModel();
        $data['config'] = $config->get()->getFirstRow();
        // client
        $db = \Config\Database::connect();
        $data['clients'] = $db->query('
            SELECT 
                client.*,
                app.name as app_name
            FROM client JOIN app
            ON client.app_id = app.id
            WHERE app.status != 0
        ')->getResult();

        return view('extranet/client/index', $data);
    }

    public function show($id)
    {
        // config
        $config = new ConfigModel();
        $data['config'] = $config->get()->getFirstRow();
       // client
       $client_model = new ClientModel();
       $client = $client_model->where('id', $id)->get()->getFirstRow();
       $data['client'] = $client;
        // app
        $app = new AppModel();
        $data['app'] = $app->where('id', $client->app_id)->get()->getFirstRow();

        return view('extranet/client/show', $data);
    }

    public function update($id)
    {
        $client = new ClientModel();

        $client->update($id, [
            'modified_at' => date('Y-m-d H:i:s'),
            'modifier_id' => session()->get('id'),
            'status' => $this->request->getPost('status')
        ]);

        session()->setFlashdata('success', 'Success update data');
        return redirect()->to(base_url('extranet/client'));
    }

    public function destroy($id)
    {
        $client = new ClientModel();
        $client->delete($id);

        session()->setFlashdata('success', 'Success delete data');
        return redirect()->to(base_url('extranet/client'));
    }
}
