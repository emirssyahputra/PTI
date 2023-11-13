<?php

namespace App\Controllers;

use CodeIgniter\Controller;

class Outlet extends BaseController
{
    public function index()
    {
        $model = new \App\Models\M_outlet();
        $data['outlet'] = $model->findAll();
        return view('admin/v_outlet', $data);
    }
}
