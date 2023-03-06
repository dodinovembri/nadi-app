<?php

namespace App\Controllers\Extranet;

use App\Models\ConfigModel;
use App\Models\ServiceModel;

class ServiceController extends BaseController
{
    public function index()
    {
        // config
        $config = new ConfigModel();
        $data['config'] = $config->get()->getFirstRow();
        // service
        $service = new ServiceModel();
        $data['services'] = $service->get()->getResult();

        return view('extranet/service/index', $data);
    }

    public function create()
    {
        // config
        $config = new ConfigModel();
        $data['config'] = $config->get()->getFirstRow();

        return view('extranet/service/create', $data);
    }

    public function store()
    {
        $service = new ServiceModel();

        $image = $this->request->getFile('image');
        $image_name = $image->getRandomName();
        $image->move('assets/images/services/', $image_name);

        $service->insert([
            'created_at' => date('Y-m-d H:i:s'),
            'creator_id' => session()->get('id'),
            'title' => $this->request->getPost('title'),
            'description' => $this->request->getPost('description'),
            'image' => $image_name,
            'status' => $this->request->getPost('status')
        ]);

        session()->setFlashdata('success', 'Success create new data');
        return redirect()->to(base_url('extranet/service'));
    }

    public function show($id)
    {
        // config
        $config = new ConfigModel();
        $data['config'] = $config->get()->getFirstRow();
        // service
        $service = new ServiceModel();
        $data['service'] = $service->where('id', $id)->get()->getFirstRow();

        return view('extranet/service/show', $data);
    }

    public function edit($id)
    {
        // config
        $config = new ConfigModel();
        $data['config'] = $config->get()->getFirstRow();
        // service
        $service = new ServiceModel();
        $data['service'] = $service->where('id', $id)->get()->getFirstRow();

        return view('extranet/service/edit', $data);
    }

    public function update($id)
    {
        $service = new ServiceModel();

        $image = $this->request->getFile('image');
        if ($image != '') {
            $image_name = $image->getRandomName();
            $image->move('assets/images/services/', $image_name);

            $service->update($id, [
                'modified_at' => date('Y-m-d H:i:s'),
                'modifier_id' => session()->get('id'),
                'image' => $image_name
            ]);
        }

        $service->update($id, [
            'modified_at' => date('Y-m-d H:i:s'),
            'modifier_id' => session()->get('id'),
            'title' => $this->request->getPost('title'),
            'description' => $this->request->getPost('description'),
            'status' => $this->request->getPost('status')
        ]);

        session()->setFlashdata('success', 'Success update data');
        return redirect()->to(base_url('extranet/service'));
    }

    public function destroy($id)
    {
        $service = new ServiceModel();
        $service->delete($id);

        session()->setFlashdata('success', 'Success delete data');
        return redirect()->to(base_url('extranet/service'));
    }
}
