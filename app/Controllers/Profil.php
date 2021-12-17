<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\UsersModel;

class Profil extends BaseController
{
    public function index()
    {
        $model = new UsersModel();
        $data['users'] = $model->getUsers();

        echo view("profil/view_profil", $data);
    }

    public function edit($nama = null)
    {
        if ($nama != null) {
            $model = new UsersModel();
            $data['users'] = $model->where('nama', $nama)->first();
            // SELECT * FROM users WHERE nim=$nim
            echo view("profil/view_editprofil", $data);
        }
    }

    public function update()
    {
        $model = new UsersModel();
        $nama = $this->request->getVar('nama');
        $prodi = $this->request->getVar('prodi');
        $email = $this->request->getVar('email');
        $ttl = $this->request->getVar('ttl');
        $kewarganegaraan = $this->request->getVar('kewarganegaraan');
        $agama = $this->request->getVar('agama');
        $alamat = $this->request->getVar('alamat');
        session();

        $data['users'] = [
            'nama' => $nama,
            'prodi' => $prodi,
            'email' => $email,
            'ttl' => $ttl,
            'kewarganegaraan' => $kewarganegaraan,
            'agama' => $agama,
            'alamat' => $alamat,
        ];

        $model->update($nama, $data);
        return redirect()->to(base_url('profil'));
    }
}
