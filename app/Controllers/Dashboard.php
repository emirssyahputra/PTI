<?php

namespace App\Controllers;

use CodeIgniter\Controller;

class Dashboard extends BaseController
{
    public function index()
    {
        $sesi_pengguna_id = session()->get('idadmin');
         $akses_pengguna = session()->get('akses');

    if ($sesi_pengguna_id) {
        if ($akses_pengguna == 1) {
        $session = \Config\Services::session();
        $data['nama'] = $session->get('namaa');
        $m_pengguna = new \App\Models\M_pengguna();
        $m_career = new \App\Models\M_career();
        $m_pelamar = new \App\Models\M_pendaftar();
        $m_outlet = new \App\Models\M_outlet();
        $data['admin'] = $m_pengguna->where('id_role', 1)->countAllResults();
        $data['lowongan'] = $m_career->countAllResults();
        $data['pelamar'] = $m_pelamar->countAllResults();
        $data['outlet'] = $m_outlet->countAllResults();
        return view('admin/v_dashboard', $data);
        } else {
            // Jika akses tidak sama dengan 1, lakukan logout dan redirect ke halaman login
            session()->destroy();
            return redirect()->to(site_url('login'));
        }
    } else {
        // Jika tidak ada sesi pengguna yang aktif, redirect ke halaman login
        return redirect()->to(site_url('login'));
    }
        
    }
}
