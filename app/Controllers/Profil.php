<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Profil extends BaseController
{
    public function index()
    {
        echo view("profil/view_profil");
    }

    public function edit()
    {
        echo view("profil/view_editprofil");
    }
}
