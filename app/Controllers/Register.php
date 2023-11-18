<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\M_Register;

class Register extends BaseController
{
    public function index()
    {
        return view('v_register');
    }

    public function daftar()
    {
        $model = new M_Register();

        $data = [
            'email' => $this->request->getVar('email'),
            'password' => password_hash($this->request->getVar('password'), PASSWORD_DEFAULT),
            'nama' => $this->request->getVar('nama'),
            'id_role' => 2,
        ];

        if ($model->insert($data)) { // Menggunakan insert() untuk menyimpan data
            return redirect()->to('/Login')->with('success', 'Registrasi berhasil! Silakan masuk.');
        } else {
            return redirect()->to('/Register')->with('error', 'Registrasi gagal. Silakan coba lagi.');
        }
    }
}
