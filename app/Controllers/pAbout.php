<?php

namespace App\Controllers;
use App\Models\M_outlet;

class pAbout extends BaseController
{
    public function index()
    {
        $sesi_pengguna_id = session()->get('idadmin');
        $akses_pengguna = session()->get('akses');

    if ($sesi_pengguna_id) {
        if ($akses_pengguna == 2) {
        $outlet = new M_outlet();
        $data['cabang'] = $outlet->findAll(); 

        return view('pelamar/v_about', $data); // Menampilkan data ke view
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
