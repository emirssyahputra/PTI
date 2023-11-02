<?php

namespace App\Controllers;

use CodeIgniter\Controller;

class Pengguna extends BaseController
{
    public function index()
    {
        $model = new \App\Models\M_pengguna();
        $data['pengguna'] = $model->where('id_role', 1) ->findAll();
        return view('admin/v_pengguna', $data);
    }
    public function search()
    {
        $keyword = $this->request->getPost('pencarian'); // Ambil keyword pencarian dari form

        // Logika untuk melakukan pencarian data pengguna berdasarkan keyword
        $model = new \App\Models\M_pengguna();
        $data['pengguna'] = $model->like('nama', $keyword)->findAll();

        return view('pengguna/index', $data);
    }
}
