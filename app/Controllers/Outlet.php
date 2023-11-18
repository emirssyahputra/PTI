<?php

namespace App\Controllers;

use CodeIgniter\Controller;

class Outlet extends BaseController
{
    public function index()
    {
        $sesi_pengguna_id = session()->get('idadmin');

    if ($sesi_pengguna_id) {
        $model = new \App\Models\M_outlet();
        $data['outlet'] = $model->findAll();
        return view('admin/v_outlet', $data);
    } else {
        // Jika tidak ada sesi pengguna yang aktif, redirect ke halaman login
        return redirect()->to(site_url('login'));
    }
       
    }
    public function search()
    {
        $keyword = $this->request->getPost('pencarian'); // Ambil keyword pencarian dari form
    
        // Logika untuk melakukan pencarian data pengguna berdasarkan keyword dan syarat id_role = 1
        $model = new \App\Models\M_outlet();
        $data['outlet'] = $model->like('nama', $keyword, 'both', null, true)->findAll();
    
        return view('admin/v_outlet', $data);
    }
    public function hapus($id)
{
    $model = new \App\Models\M_outlet();
    // Cek apakah pengguna dengan ID yang diberikan ada
    $outlet = $model->find($id);

    if ($outlet) {
        // Hapus pengguna dengan ID yang diberikan
        $model->delete($id);
        // Redirect kembali ke halaman pengguna setelah penghapusan
        return redirect()->to(site_url('Outlet'));
    } else {
        // Jika pengguna tidak ditemukan, Anda dapat menampilkan pesan kesalahan atau melakukan tindakan lain sesuai kebutuhan.
        return redirect()->to(site_url('Outlet'));
    }
}
}
