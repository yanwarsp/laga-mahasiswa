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

    public function logout()
    {
        session()->destroy();
        return redirect()->to(base_url('home'));
    }
}
