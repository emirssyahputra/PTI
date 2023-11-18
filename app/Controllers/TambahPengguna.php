<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\M_pengguna;

class TambahPengguna extends BaseController
{
    public function index()
    {
        $sesi_pengguna_id = session()->get('idadmin');

    if ($sesi_pengguna_id) {
        return view('admin/v_tambah_pengguna');
    } else {
        // Jika tidak ada sesi pengguna yang aktif, redirect ke halaman login
        return redirect()->to(site_url('login'));
    }
        
    }
    public function tambah()
    {
        $data = [];
        $model = new M_pengguna();

        $data = [
            'email' => $this->request->getVar('email'),
            'password' => password_hash($this->request->getVar('password'), PASSWORD_DEFAULT),
            'nama' => $this->request->getVar('nama'),
            'id_role' => 1,
        ];

        if ($model->insert($data)) { // Menggunakan insert() untuk menyimpan data
            return redirect()->to('/Pengguna')->with('success', 'Registrasi berhasil! Silakan masuk.');
        } else {
            return redirect()->to('/TambahPengguna')->with('error', 'Registrasi gagal. Silakan coba lagi.');
        }
    }
}