<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Lomba extends BaseController
{
    public function index()
    {
        echo view("lomba/view_lomba");
    }

    public function ukm()
    {
        echo view("lomba/view_lomba_ukm");
    }

    public function hmj()
    {
        echo view("lomba/view_lomba_hmj");
    }

    public function bem()
    {
        echo view("lomba/view_lomba_bem");
    }

    public function general()
    {
        echo view("lomba/view_lomba_general");
    }
}
