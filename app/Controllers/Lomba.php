<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\LombaModel;

class Lomba extends BaseController
{
    public function index()
    {
        $model = new LombaModel();
        $data['lomba'] = $model->getLomba();
        echo view("lomba/view_lomba", $data);
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
