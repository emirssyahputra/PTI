<?php

namespace App\Controllers;

use CodeIgniter\Controller;

class UbahJob extends BaseController
{
    public function index()
    {
        return view('admin/v_ubah_job.php');
    }
}
