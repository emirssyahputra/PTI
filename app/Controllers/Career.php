<?php namespace App\Controllers;

use App\Models\M_career;
use CodeIgniter\Controller;

class Career extends Controller
{
    public function index()
    {
        $lowongan = new M_career();
        $data['loker'] = $lowongan->findAll(); // Mengambil semua data lowongan pekerjaan

        return view('v_career', $data); // Menampilkan data ke view
    }
}
