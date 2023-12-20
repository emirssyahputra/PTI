<?php

namespace App\Controllers;

class Home extends BaseController
{        

    public function index()
    {
        $lowongan = new \App\Models\M_career();
        $m_outlet = new \App\Models\M_outlet();
        $data['loker'] = $lowongan->get_lowongan_berjalan();        
        $data['tot_outlet'] = $m_outlet -> countAllResults(); // Menambahkan data jumlah outlet ke $data
        return view('v_home', $data);
    }
    
}
