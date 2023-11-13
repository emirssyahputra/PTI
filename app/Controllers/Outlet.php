<?php

namespace App\Controllers;

use CodeIgniter\Controller;

class Outlet extends BaseController
{
    public function index()
    {
        return view('admin/v_outlet.php');
    }
}
