<?php

namespace App\Controllers;

use CodeIgniter\Controller;

class Pengguna extends BaseController
{
    public function index()
    {
        
        return view('admin/v_pengguna');
    }
}
