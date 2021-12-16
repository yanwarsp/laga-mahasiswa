<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\UsersModel;

class Login extends BaseController
{
    public function index()
    {
        $data = [
            'validation' => \Config\Services::validation()
        ];
        return view('auth/view_login', $data);
    }

    public function logout()
    {
        session()->destroy();
        return redirect()->to(base_url('home'));
    }

    public function submitLogin()
    {
        if (!$this->validate([
            'nim' => 'required',
            'password' => 'required',

        ])) {
            $validation = \Config\Services::validation();
            return redirect()->to(base_url('login'))->withInput()->with('validation', $validation);
        }


        $model = new UsersModel();
        $nim = $this->request->getVar('nim');
        $password = $this->request->getVar('password');

        $data = $model->where('nim', $nim)->first();

        if ($data) {
            if (password_verify($password, $data['password'])) {
                session()->set([
                    'nama' => $data['nama'],
                    'logged_in' => true,
                ]);
                return redirect()->to(base_url('home'));
            } else {
                session()->setFlashdata("error", "NIM atau Password salah \n");
                return redirect()->back();
            }
        } else {
            session()->setFlashdata("error", "NIM atau Password salah \n");
            return redirect()->back();
        }
    }
}
