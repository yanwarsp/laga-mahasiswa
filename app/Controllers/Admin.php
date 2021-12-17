<?php

namespace App\Controllers;

use App\Controllers\BaseController;

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
            echo view("admin/view_daftaruser");
        } else {
            return redirect()->to(base_url('/'));
        }
    }

    public function managemagang()
    {
        if (session('nama') == 'Administrator') {
            echo view("admin/view_managemagang");
        } else {
            return redirect()->to(base_url('/'));
        }
    }

    public function managelomba()
    {
        if (session('nama') == 'Administrator') {
            echo view("admin/view_managelomba");
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
