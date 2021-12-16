<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Admin extends BaseController
{
    public function dashboard()
    {
        echo view("admin/view_dashboard");
    }

    public function listusers()
    {
        echo view("admin/view_listusers");
    }

    public function managemagang()
    {
        echo view("admin/view_managemagang");
    }

    public function managelomba()
    {
        echo view("admin/view_managelomba");
    }
}
