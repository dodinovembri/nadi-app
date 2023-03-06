<?php

namespace App\Controllers\Extranet;

use App\Models\ConfigModel;
use App\Models\FeatureModel;

class FeatureController extends BaseController
{
    public function index()
    {
        // config
        $config = new ConfigModel();
        $data['config'] = $config->get()->getFirstRow();
        // feature
        $feature = new FeatureModel();
        $data['features'] = $feature->get()->getResult();

        return view('extranet/feature/index', $data);
    }

    public function create()
    {
        // config
        $config = new ConfigModel();
        $data['config'] = $config->get()->getFirstRow();

        return view('extranet/feature/create', $data);
    }

    public function store()
    {
        $feature = new FeatureModel();

        $feature->insert([
            'created_at' => date('Y-m-d H:i:s'),
            'creator_id' => session()->get('id'),
            'title' => $this->request->getPost('title'),
            'description' => $this->request->getPost('description'),
            'status' => $this->request->getPost('status')
        ]);

        session()->setFlashdata('success', 'Success create new data');
        return redirect()->to(base_url('extranet/feature'));
    }

    public function show($id)
    {
        // config
        $config = new ConfigModel();
        $data['config'] = $config->get()->getFirstRow();
        // feature
        $feature = new FeatureModel();
        $data['feature'] = $feature->where('id', $id)->get()->getFirstRow();

        return view('extranet/feature/show', $data);
    }

    public function edit($id)
    {
        // config
        $config = new ConfigModel();
        $data['config'] = $config->get()->getFirstRow();
        // feature
        $feature = new FeatureModel();
        $data['feature'] = $feature->where('id', $id)->get()->getFirstRow();

        return view('extranet/feature/edit', $data);
    }

    public function update($id)
    {
        $feature = new FeatureModel();

        $feature->update($id, [
            'modified_at' => date('Y-m-d H:i:s'),
            'modifier_id' => session()->get('id'),
            'title' => $this->request->getPost('title'),
            'description' => $this->request->getPost('description'),
            'status' => $this->request->getPost('status')
        ]);

        session()->setFlashdata('success', 'Success update data');
        return redirect()->to(base_url('extranet/feature'));
    }

    public function destroy($id)
    {
        $feature = new FeatureModel();
        $feature->delete($id);

        session()->setFlashdata('success', 'Success delete data');
        return redirect()->to(base_url('extranet/feature'));
    }
}
