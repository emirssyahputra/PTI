<?php

namespace App\Controllers;

class Home extends BaseController
{        

    public function index()
    {
        $m_career = new \App\Models\M_Career(); // Membuat objek model M_Career
        $m_outlet = new \App\Models\M_outlet();
        $data['loker'] = $m_career->get_lowongan_berjalan();
        $data['tot_outlet'] = $m_outlet -> countAllResults(); // Menambahkan data jumlah outlet ke $data
        return view('v_home', $data);
    }
    
}
