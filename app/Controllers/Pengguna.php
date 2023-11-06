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
    
        // Logika untuk melakukan pencarian data pengguna berdasarkan keyword dan syarat id_role = 1
        $model = new \App\Models\M_pengguna();
        $data['pengguna'] = $model->where('id_role', 1)->like('nama', $keyword)->findAll();
    
        return view('admin/v_pengguna', $data);
    }
    public function hapus($id)
{
    $model = new \App\Models\M_pengguna();
    // Cek apakah pengguna dengan ID yang diberikan ada
    $pengguna = $model->find($id);

    if ($pengguna) {
        // Hapus pengguna dengan ID yang diberikan
        $model->delete($id);
        // Redirect kembali ke halaman pengguna setelah penghapusan
        return redirect()->to(site_url('pengguna'));
    } else {
        // Jika pengguna tidak ditemukan, Anda dapat menampilkan pesan kesalahan atau melakukan tindakan lain sesuai kebutuhan.
        return redirect()->to(site_url('pengguna'));
    }
}

}
