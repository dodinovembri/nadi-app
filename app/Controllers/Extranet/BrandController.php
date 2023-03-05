<?php

namespace App\Controllers\Extranet;

use App\Models\ConfigModel;
use App\Models\BrandModel;

class BrandController extends BaseController
{
    public function index()
    {
        // config
        $config = new ConfigModel();
        $data['config'] = $config->get()->getFirstRow();
        // app type
        $brand = new BrandModel();
        $data['brands'] = $brand->get()->getResult();

        return view('extranet/brand/index', $data);
    }

    public function create()
    {
        // config
        $config = new ConfigModel();
        $data['config'] = $config->get()->getFirstRow();

        return view('extranet/brand/create', $data);
    }

    public function store()
    {
        $brand = new BrandModel();

        $brand_image = $this->request->getFile('image');
        $brand_image_name = $brand_image->getRandomName();
        $brand_image->move('assets/images/brands/', $brand_image_name);

        $brand->insert([
            'created_at' => date('Y-m-d H:i:s'),
            'creator_id' => session()->get('id'),
            'code' => $this->request->getPost('code'),
            'name' => $this->request->getPost('name'),
            'image' => $brand_image_name,
            'status' => $this->request->getPost('status')
        ]);

        session()->setFlashdata('success', 'Success create new data');
        return redirect()->to(base_url('extranet/brand'));
    }

    public function show($id)
    {
        // config
        $config = new ConfigModel();
        $data['config'] = $config->get()->getFirstRow();
        // app type
        $brand = new BrandModel();
        $data['brand'] = $brand->where('id', $id)->get()->getFirstRow();

        return view('extranet/brand/show', $data);
    }

    public function edit($id)
    {
        // config
        $config = new ConfigModel();
        $data['config'] = $config->get()->getFirstRow();
        // app type
        $brand = new BrandModel();
        $data['brand'] = $brand->where('id', $id)->get()->getFirstRow();

        return view('extranet/brand/edit', $data);
    }

    public function update($id)
    {
        $brand = new BrandModel();

        $brand_image = $this->request->getFile('image');
        if ($brand_image != '') {
            $brand_image_name = $brand_image->getRandomName();
            $brand_image->move('assets/images/brands/', $brand_image_name);

            $brand->update($id, [
                'modified_at' => date('Y-m-d H:i:s'),
                'modifier_id' => session()->get('id'),
                'image' => $brand_image_name
            ]);
        }

        $brand->update($id, [
            'modified_at' => date('Y-m-d H:i:s'),
            'modifier_id' => session()->get('id'),
            'code' => $this->request->getPost('code'),
            'name' => $this->request->getPost('name'),
            'status' => $this->request->getPost('status')
        ]);

        session()->setFlashdata('success', 'Success update data');
        return redirect()->to(base_url('extranet/brand'));
    }

    public function destroy($id)
    {
        $brand = new BrandModel();
        $brand->delete($id);

        session()->setFlashdata('success', 'Success delete data');
        return redirect()->to(base_url('extranet/brand'));
    }
}
