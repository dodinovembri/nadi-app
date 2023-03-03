<?php

namespace App\Controllers\Extranet;

use App\Models\UserModel;

class AuthController extends BaseController
{
    public function login()
    {
        return view('extranet/auth/login');
    }

    public function auth()
    {
        $session = session();
        $email = $this->request->getPost('email');
        $password = $this->request->getPost('password');

        $user = new UserModel();
        $data = $user->where('email', $email)->where('role_code', 0)->first();
        if ($data) {
            $pass = $data['password'];
            $verify_pass = password_verify($password, $pass);
            if ($verify_pass) {
                $ses_data = [
                    'id'       => $data['id'],
                    'name'     => $data['name'],
                    'email'    => $data['email'],
                    'role_code' => $data['role_code'],
                    'logged_in'     => TRUE
                ];
                $session->set($ses_data);
                return redirect()->to(base_url('extranet'));
            } else {
                $session->setFlashdata('msg', 'Wrong Password');
                return redirect()->to(base_url('ext-login'));
            }
        } else {
            $session->setFlashdata('msg', 'Email not Found');
            return redirect()->to(base_url('ext-login'));
        }
    }

    public function logout()
    {
        session()->destroy();
        return redirect()->to(base_url('ext-login'));
    }
}

?>