<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\UsersModel;

class Register extends BaseController
{
    public function index()
    {
        $data = [
            'validation' => \Config\Services::validation()
        ];
        return view('auth/view_register', $data);
    }

    public function submitRegister()
    {

        if (!$this->validate([
            'nama' => 'required',
            'nim' => 'required',
            'prodi' => 'required',
            'email' => 'required',
            'password' => 'required',
            'cpassword' => 'required',
        ])) {
            $validation = \Config\Services::validation();
            return redirect()->to(base_url('register'))->withInput()->with('validation', $validation);
        }

        // buat model untuk proses insert ke tabel user
        $model = new UsersModel();
        $password = $this->request->getVar('password');
        $cpassword = $this->request->getVar('cpassword');
        if (strcmp($password, $cpassword) == 0) {
            $data = [
                'nama' => $this->request->getVar('nama'),
                'nim' => $this->request->getVar('nim'),
                'prodi' => $this->request->getVar('prodi'),
                'email' => $this->request->getVar('email'),
                'password' => password_hash($this->request->getVar('password'), PASSWORD_DEFAULT),
            ];

            $model->insert($data);
            return redirect()->to(base_url('login'));
        } else {
            return redirect()->to(base_url('register'))->withInput();
        }
    }
}
