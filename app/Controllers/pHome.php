<?php

namespace App\Controllers;

class pHome extends BaseController
{
    public function index()
    {
        $sesi_pengguna_id = session()->get('idadmin');
        $akses_pengguna = session()->get('akses');

        if ($sesi_pengguna_id) {
            if ($akses_pengguna == 2) {
            $lowongan = new \App\Models\M_career();
            $m_outlet = new \App\Models\M_outlet();
            $data['loker'] = $lowongan->get_lowongan_berjalan();        
            $data['tot_outlet'] = $m_outlet -> countAllResults(); // Menambahkan data jumlah outlet ke $data
            return view('pelamar/v_home', $data);
            } else {
            
            session()->destroy();
            return redirect()->to(site_url('login'));
        }
        } else {
            // Jika tidak ada sesi pengguna yang aktif, redirect ke halaman login
            return redirect()->to(site_url('login'));
        }
        
    }
    
}
