<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        $m_career = new \App\Models\M_Career(); // Membuat objek model M_Career
        $data['loker'] = $m_career->get_all_lowongan(); // Mengambil semua data lowongan
        return view('v_home', $data);
    }
    
}
