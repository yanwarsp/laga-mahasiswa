<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Admin extends BaseController
{

    public function index()
    {
        if (session('nim') == 'admin') {
            echo view("admin/view_dashboard");
        } else {
            return redirect()->to(base_url('/'));
        }
    }

    public function dashboard()
    {
        echo view("admin/view_dashboard");
    }

    public function daftaruser()
    {
        echo view("admin/view_daftaruser");
    }

    public function managemagang()
    {
        echo view("admin/view_managemagang");
    }

    public function managelomba()
    {
        echo view("admin/view_managelomba");
    }

    public function logout()
    {
        session()->destroy();
        return redirect()->to(base_url('home'));
    }
}
