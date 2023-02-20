<?php

namespace App\Controllers\Extranet;

use App\Models\CustomerTypeModel;

class CustomerTypeController extends BaseController
{
    public function index()
    {
        $customer_type = new CustomerTypeModel();
        $data['customer_types'] = $customer_type->get()->getResult();

        return view('extranet/customer_type/index', $data);
    }

    public function create()
    {
        return view('extranet/customer_type/create');
    }

    public function store()
    {
        $customer_type = new CustomerTypeModel();

        $image = $this->request->getFile('image');
        $image_name = $image->getRandomName();
        $image->move('assets/images/product_categories/', $image_name);

        $customer_type->insert([
            'created_at' => date('Y-m-d H:i:s'),
            'creator_id' => session()->get('id'),
            'code' => $this->request->getPost('code'),
            'name' => $this->request->getPost('name'),
            'image' => $image_name,
            'status' => $this->request->getPost('status')
        ]);

        session()->setFlashdata('success', 'Success create new data');
        return redirect()->to(base_url('extranet/product-category'));
    }

    public function show($id)
    {
        $customer_type = new CustomerTypeModel();
        $data['customer_type'] = $customer_type->where('id', $id)->get()->getFirstRow();

        return view('extranet/customer_type/show', $data);
    }

    public function edit($id)
    {
        $customer_type = new CustomerTypeModel();
        $data['customer_type'] = $customer_type->where('id', $id)->get()->getFirstRow();

        return view('extranet/customer_type/edit', $data);
    }

    public function update($id)
    {
        $customer_type = new CustomerTypeModel();
        $image = $this->request->getFile('image');
        if ($image != '') {
            // image
            $image_name = $image->getRandomName();
            $image->move('assets/images/product_categories/', $image_name);

            $customer_type->update($id, [
                'modified_at' => date('Y-m-d H:i:s'),
                'modifier_id' => session()->get('id'),
                'code' => $this->request->getPost('code'),
                'name' => $this->request->getPost('name'),
                'image' => $image_name,
                'status' => $this->request->getPost('status')
            ]);
        } else {
            $customer_type->update($id, [
                'modified_at' => date('Y-m-d H:i:s'),
                'modifier_id' => session()->get('id'),
                'code' => $this->request->getPost('code'),
                'name' => $this->request->getPost('name'),
                'status' => $this->request->getPost('status')
            ]);
        }

        session()->setFlashdata('success', 'Success update data');
        return redirect()->to(base_url('extranet/product-category'));
    }

    public function destroy($id)
    {
        $customer_type = new CustomerTypeModel();
        $customer_type->delete($id);

        session()->setFlashdata('success', 'Success delete data');
        return redirect()->to(base_url('extranet/product-category'));
    }
}
