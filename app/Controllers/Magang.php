<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\MagangModel;

class Magang extends BaseController
{
    public function index()
    {
        $model = new MagangModel();
        $data['magang'] = $model->getMagang();
        echo view("magang/view_magang", $data);
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
