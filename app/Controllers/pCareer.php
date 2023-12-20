<?php 
namespace App\Controllers;

use App\Models\M_career;
use CodeIgniter\Controller;

class pCareer extends Controller
{
    public function index()
    {
        $sesi_pengguna_id = session()->get('idadmin');
        $akses_pengguna = session()->get('akses');

    if ($sesi_pengguna_id) {
        if ($akses_pengguna == 2) {
        $lowongan = new M_career();
        $data['loker'] = $lowongan->get_lowongan_berjalan();

        return view('pelamar/v_career', $data); // Menampilkan data ke view
        } else {
            session()->destroy();
            return redirect()->to(site_url('login'));
        }
    } else {
        // Jika tidak ada sesi pengguna yang aktif, redirect ke halaman login
        return redirect()->to(site_url('login'));
    }
        
    }
}
