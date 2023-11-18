<?php

namespace App\Controllers;

use CodeIgniter\Controller;

class Dashboard extends BaseController
{
    public function index()
    {
        $sesi_pengguna_id = session()->get('idadmin');

    if ($sesi_pengguna_id) {
        $session = \Config\Services::session();
        $data['nama'] = $session->get('namaa');
        $m_pengguna = new \App\Models\M_pengguna();
        $m_career = new \App\Models\M_career();
        $m_pelamar = new \App\Models\M_career();
        $m_outlet = new \App\Models\M_outlet();
        $data['admin'] = $m_pengguna->where('id_role', 1)->countAllResults();
        $data['lowongan'] = $m_career->countAllResults();
        $data['pelamar'] = $m_pengguna->countAllResults();
        $data['outlet'] = $m_outlet->countAllResults();
        return view('admin/v_dashboard', $data);
    } else {
        // Jika tidak ada sesi pengguna yang aktif, redirect ke halaman login
        return redirect()->to(site_url('login'));
    }
        
    }
}
