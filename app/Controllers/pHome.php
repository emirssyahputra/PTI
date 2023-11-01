<?php

namespace App\Controllers;

class pHome extends BaseController
{
    public function index()
    {
        $m_career = new \App\Models\M_Career(); // Membuat objek model M_Career
        $m_outlet = new \App\Models\M_outlet();
        $data['loker'] = $m_career->get_all_lowongan(); // Mengambil semua data lowongan
        $data['tot_outlet'] = $m_outlet -> countAllResults(); // Menambahkan data jumlah outlet ke $data
        return view('pelamar/v_home', $data);
    }
    
}
