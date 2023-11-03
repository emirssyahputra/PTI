<?php

namespace App\Controllers;

use CodeIgniter\Controller;

class Dashboard extends BaseController
{
    public function index()
    {
        $session = \Config\Services::session();
        $data['nama'] = $session->get('namaa');
        $m_pengguna = new \App\Models\M_pengguna();
        $m_career = new \App\Models\M_career();
        $m_pelamar = new \App\Models\M_career();
        $data['admin'] = $m_pengguna->where('id_role', 1)->countAllResults();
        $data['lowongan'] = $m_career->countAllResults();
        $data['pelamar'] = $m_pengguna->countAllResults();
        return view('admin/v_dashboard', $data);
    }
}
