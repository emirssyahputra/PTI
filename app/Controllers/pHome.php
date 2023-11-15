<?php

namespace App\Controllers;

class pHome extends BaseController
{
    public function index()
    {
        $lowongan = new \App\Models\M_Career(); // Membuat objek model M_Career
        $m_outlet = new \App\Models\M_outlet();
        $data['loker'] = $lowongan->get_lowongan_berjalan();        
        $data['tot_outlet'] = $m_outlet -> countAllResults(); // Menambahkan data jumlah outlet ke $data
        return view('pelamar/v_home', $data);
    }
    
}
