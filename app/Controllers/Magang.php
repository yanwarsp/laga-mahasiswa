<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Magang extends BaseController
{
    public function index()
    {
        echo view("view_magang");
    }

}
