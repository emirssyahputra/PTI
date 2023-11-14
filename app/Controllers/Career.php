<?php namespace App\Controllers;

use App\Models\M_career;
use CodeIgniter\Controller;

class Career extends Controller
{
    public function index()
    {
        $lowongan = new M_career();
        $data['loker'] = $lowongan->get_lowongan_berjalan();

        return view('v_career', $data);
    }
}
