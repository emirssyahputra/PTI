<?php

namespace App\Controllers;
use App\Models\M_outlet;

class About extends BaseController
{
    public function index()
    {
        $outlet = new M_outlet();
        $data['cabang'] = $outlet->findAll(); // Mengambil semua data lowongan pekerjaan

        return view('v_about', $data); // Menampilkan data ke view
    }
}
