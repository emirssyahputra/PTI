<?php namespace App\Controllers;

use App\Models\M_career;
use CodeIgniter\Controller;

class EditKontrak extends Controller
{
    public function index()
    {
        return view('admin/v_edit_kontrak');
    }
}
