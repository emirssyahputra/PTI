<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\M_pengguna; 

class UbahPengguna extends Controller
{
    public function index($id)
    {
        $sesi_pengguna_id = session()->get('idadmin');
        $akses_pengguna = session()->get('akses');

    if ($sesi_pengguna_id) {
        if ($akses_pengguna == 1) {
        $model = new M_pengguna();
        $data['pengguna'] = $model->find($id);

        // Validasi jika pengguna tidak ditemukan
        if ($data['pengguna'] === null) {
            // Tampilkan pesan kesalahan atau redirect ke halaman lain
            return redirect()->to('error');
        }

        return view('admin/v_ubah_pengguna', ['pengguna' => $data['pengguna'], 'id' => $id]);
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

    public function update($id)
    {
        $model = new M_pengguna();
        $data = [
            'nama' => $this->request->getPost('nama'),
            'email' => $this->request->getPost('email'),
            'password' => password_hash($this->request->getPost('password'), PASSWORD_DEFAULT),
        ];

        if ($model->update($id, $data)) {
            return redirect()->to('/Pengguna')->with('success', 'Berhasil Update Data Pengguna.');
        } else {
            return redirect()->to('/UbahPengguna')->with('error', 'Tidak Berhasil Update Data Pengguna');
        }
    }
}
