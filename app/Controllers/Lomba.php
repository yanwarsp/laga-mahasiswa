<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Lomba extends BaseController
{
    public function index()
    {
        echo view("lomba/view_lomba");
    }
}
