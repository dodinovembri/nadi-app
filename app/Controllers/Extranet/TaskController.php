<?php

namespace App\Controllers\Extranet;

use App\Models\ConfigModel;
use App\Models\TaskModel;

class TaskController extends BaseController
{
    public function index()
    {
        // config
        $config = new ConfigModel();
        $data['config'] = $config->get()->getFirstRow();
        // task
        $task = new TaskModel();
        $data['tasks'] = $task->get()->getResult();

        return view('extranet/task/index', $data);
    }

    public function create()
    {
        // config
        $config = new ConfigModel();
        $data['config'] = $config->get()->getFirstRow();

        return view('extranet/task/create', $data);
    }

    public function store()
    {
        $task = new TaskModel();

        $task->insert([
            'created_at' => date('Y-m-d H:i:s'),
            'creator_id' => session()->get('id'),
            'title' => $this->request->getPost('title'),
            'description' => $this->request->getPost('description'),
            'start_date' => $this->request->getPost('start_date'),
            'end_date' => $this->request->getPost('end_date'),
            'status' => $this->request->getPost('status')
        ]);

        session()->setFlashdata('success', 'Success create new data');
        return redirect()->to(base_url('extranet/task'));
    }

    public function show($id)
    {
        // config
        $config = new ConfigModel();
        $data['config'] = $config->get()->getFirstRow();
        // task
        $task = new TaskModel();
        $data['task'] = $task->where('id', $id)->get()->getFirstRow();

        return view('extranet/task/show', $data);
    }

    public function edit($id)
    {
        // config
        $config = new ConfigModel();
        $data['config'] = $config->get()->getFirstRow();
        // task
        $task = new TaskModel();
        $data['task'] = $task->where('id', $id)->get()->getFirstRow();

        return view('extranet/task/edit', $data);
    }

    public function update($id)
    {
        $task = new TaskModel();

        $task->update($id, [
            'modified_at' => date('Y-m-d H:i:s'),
            'modifier_id' => session()->get('id'),
            'title' => $this->request->getPost('title'),
            'description' => $this->request->getPost('description'),
            'start_date' => $this->request->getPost('start_date'),
            'end_date' => $this->request->getPost('end_date'),
            'status' => $this->request->getPost('status')
        ]);

        session()->setFlashdata('success', 'Success update data');
        return redirect()->to(base_url('extranet/task'));
    }

    public function destroy($id)
    {
        $task = new TaskModel();
        $task->delete($id);

        session()->setFlashdata('success', 'Success delete data');
        return redirect()->to(base_url('extranet/task'));
    }
}
