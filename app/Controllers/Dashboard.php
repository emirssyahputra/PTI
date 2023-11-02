<?php

namespace App\Controllers;

use CodeIgniter\Controller;

class Dashboard extends BaseController
{
    public function index()
    {
        $m_pengguna = new \App\Models\M_pengguna();
        $data['admin'] = $m_pengguna->where('id_role', 1)->countAllResults();
        return view('admin/v_dashboard', $data);
    }
}
