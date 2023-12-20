<?php

namespace App\Controllers;

use CodeIgniter\Controller;

class Pengguna extends BaseController
{
    public function index()
    {
    $sesi_pengguna_id = session()->get('idadmin');
    $akses_pengguna = session()->get('akses');
    
    if ($sesi_pengguna_id) {
        if ($akses_pengguna == 1) {
        $model = new \App\Models\M_pengguna();
        $data['pengguna'] = $model->where('id_role', 1) ->findAll();
        return view('admin/v_pengguna', $data);
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
    
        // Ambil ID pengguna dari sesi
        $sesi_pengguna_id = session()->get('idadmin');
    
        // Cek apakah pengguna dengan ID yang diberikan ada
        $pengguna = $model->find($id);
    
        if ($pengguna) {
            // Jika ID pengguna yang dihapus sama dengan ID pengguna yang sedang aktif
            if ($id == $sesi_pengguna_id) {

                $session = \Config\Services::session();
                $session->destroy();
                $model->delete($id);
                // Kembali ke halaman login
                return redirect()->to(site_url('login'));
            }
    
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
