<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Magang extends BaseController
{
    public function index()
    {
        echo view("magang/view_magang");
    }

    public function keuangan()
    {
        echo view("magang/view_magang_keuangan");
    }

    public function ict()
    {
        echo view("magang/view_magang_ict");
    }

    public function marketing()
    {
        echo view("magang/view_magang_marketing");
    }

    public function studio()
    {
        echo view("magang/view_magang_studio");
    }

    public function asdos()
    {
        echo view("magang/view_magang_asdos");
    }
}
