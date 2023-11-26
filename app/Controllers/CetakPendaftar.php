<?php

namespace App\Controllers;

class CetakPendaftar extends BaseController
{
    public function index()
    {
        return view('admin/v_cetak_pendaftar');
    }
    
}