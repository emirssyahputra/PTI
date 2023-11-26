<?php namespace App\Controllers;

use App\Models\M_career;
use CodeIgniter\Controller;

class KontrakKerja extends Controller
{
    public function index()
    {
        return view('admin/v_kontrak_kerja');
    }
}
