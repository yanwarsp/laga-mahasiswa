<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\LombaModel;
use App\Models\MagangModel;
use App\Models\UsersModel;

class Admin extends BaseController
{

    public function index()
    {
        if (session('nama') == 'Administrator') {
            echo view("admin/view_dashboard");
        } else {
            return redirect()->to(base_url('/'));
        }
    }

    public function logout()
    {
        session()->destroy();
        return redirect()->to(base_url('home'));
    }

    public function dashboard()
    {
        if (session('nama') == 'Administrator') {
            echo view("admin/view_dashboard");
        } else {
            return redirect()->to(base_url('/'));
        }
    }

    public function daftaruser()
    {
        if (session('nama') == 'Administrator') {
            $model = new UsersModel();
            $data['users'] = $model->getUsers();

            echo view('admin/view_daftaruser', $data);
        } else {
            return redirect()->to(base_url('/'));
        }
    }

    public function managemagang()
    {
        if (session('nama') == 'Administrator') {
            $model = new MagangModel();
            $data['magang'] = $model->getMagang();

            echo view('admin/view_managemagang', $data);
        } else {
            return redirect()->to(base_url('/'));
        }
    }

    public function managelomba()
    {
        if (session('nama') == 'Administrator') {
            $model = new LombaModel();
            $data['lomba'] = $model->getLomba();

            echo view('admin/view_managelomba', $data);
        } else {
            return redirect()->to(base_url('/'));
        }
    }

    public function tambahmagang()
    {
        echo view('admin/view_tambahmagang');
    }

    public function tambahlomba()
    {
        echo view('admin/view_tambahlomba');
    }

    public function deleteuser($nim = null)
    {
        if ($nim != null) {
            $model = new UsersModel();
            $data['users'] = $model->where('nim', $nim)->delete();

            return redirect()->to(base_url('admin/daftaruser'));
        }
    }

    public function deletemagang($id = null)
    {
        if ($id != null) {
            $model = new MagangModel();
            $data['orders'] = $model->where('id', $id)->delete();
            return redirect()->to(base_url('admin/managemagang'));
        }
    }

    public function deletelomba($id = null)
    {
        if ($id != null) {
            $model = new LombaModel();
            $data['orders'] = $model->where('id', $id)->delete();
            return redirect()->to(base_url('admin/managelomba'));
        }
    }

    public function submitmagang()
    {
        $model = new MagangModel();
        $data = [
            'nama' => $this->request->getVar('nama'),
            'penyelenggara' => $this->request->getVar('penyelenggara'),
            'sektor' => $this->request->getVar('sektor'),
            'poin' => $this->request->getVar('poin'),
            'kriteria' => $this->request->getVar('kriteria'),
            'deskripsi' => $this->request->getVar('deskripsi'),
        ];

        $model->insert($data);
        return redirect()->to(base_url('admin/managemagang'));
    }

    public function submitlomba()
    {
        $model = new LombaModel();
        $data = [
            'nama' => $this->request->getVar('nama'),
            'penyelenggara' => $this->request->getVar('penyelenggara'),
            'kelompok' => $this->request->getVar('kelompok'),
            'hadiah' => $this->request->getVar('hadiah'),
            'poin' => $this->request->getVar('poin'),
            'kriteria' => $this->request->getVar('kriteria'),
            'deskripsi' => $this->request->getVar('deskripsi'),
        ];

        $model->insert($data);
        return redirect()->to(base_url('admin/managelomba'));
    }
}
