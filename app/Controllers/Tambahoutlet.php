<?php

namespace App\Controllers;

use CodeIgniter\Controller;

class TambahOutlet extends BaseController
{
    public function index()
    {
        return view('admin/v_tambah_outlet.php');
    }
}
