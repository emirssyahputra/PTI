<?php

namespace App\Controllers;

use CodeIgniter\Controller;

class TambahJob extends BaseController
{
    public function index()
    {
        return view('admin/v_tambah_job.php');
    }
}
