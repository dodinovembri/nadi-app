<?php

namespace App\Controllers\Extranet;

use App\Models\ProspectiveCustomerModel;

class ProspectiveCustomerController extends BaseController
{
    public function index()
    {
        $prospective_customer = new ProspectiveCustomerModel();
        $data['prospective_customers'] = $prospective_customer->orderBy('created_at', 'ASC')->get()->getResult();

        return view('extranet/prospective_customer/index', $data);
    }

    public function create()
    {
        return view('extranet/prospective_customer/create');
    }

    public function store()
    {
        $prospective_customer = new ProspectiveCustomerModel();

        $prospective_customer->insert([
            'created_at' => date('Y-m-d H:i:s'),
            'creator_id' => session()->get('id'),
            'question' => $this->request->getPost('question'),
            'answer' => $this->request->getPost('answer'),
            'status' => $this->request->getPost('status')
        ]);

        session()->setFlashdata('success', 'Success create new data');
        return redirect()->to(base_url('extranet/prospective_customer'));
    }

    public function show($id)
    {
        $prospective_customer = new ProspectiveCustomerModel();
        $data['prospective_customer'] = $prospective_customer->where('id', $id)->get()->getFirstRow();

        return view('extranet/prospective_customer/show', $data);
    }

    public function edit($id)
    {
        $prospective_customer = new ProspectiveCustomerModel();
        $data['prospective_customer'] = $prospective_customer->where('id', $id)->get()->getFirstRow();

        return view('extranet/prospective_customer/edit', $data);
    }

    public function update($id)
    {
        $prospective_customer = new ProspectiveCustomerModel();

        $prospective_customer->update($id, [
            'modified_at' => date('Y-m-d H:i:s'),
            'modifier_id' => session()->get('id'),
            'question' => $this->request->getPost('question'),
            'answer' => $this->request->getPost('answer'),
            'status' => $this->request->getPost('status')
        ]);

        session()->setFlashdata('success', 'Success update data');
        return redirect()->to(base_url('extranet/prospective_customer'));
    }

    public function destroy($id)
    {
        $prospective_customer = new ProspectiveCustomerModel();
        $prospective_customer->delete($id);

        session()->setFlashdata('success', 'Success delete data');
        return redirect()->to(base_url('extranet/prospective_customer'));
    }
}
