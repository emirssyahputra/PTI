<?php

namespace App\Controllers;

use CodeIgniter\Controller;

class Selection extends BaseController
{
public function index()
    {
        return view('pelamar/v_selection');
    }
}