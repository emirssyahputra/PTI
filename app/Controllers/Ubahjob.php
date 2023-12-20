<?php

namespace App\Controllers;

use App\Models\M_job;

class UbahJob extends BaseController
{
    public function index($id_loker)
    {
        $sesi_pengguna_id = session()->get('idadmin');
         $akses_pengguna = session()->get('akses');

    if ($sesi_pengguna_id) {
        if ($akses_pengguna == 1) {
        $model = new M_job();
        $data['job'] = $model->getJobById($id_loker);

        return view('admin/v_ubah_job.php', $data);
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
    public function updateJob()
    {
        $model = new M_job();

        $id_loker = $this->request->getVar('id_loker');
        $data = [
            'Nama' => $this->request->getVar('Name'),
            'waktu_mulai' => $this->request->getVar('waktu_mulai'),
            'waktu_akhir' => $this->request->getVar('waktu_akhir'),
            'kualifikasi' => $this->request->getVar('kualifikasi'),
            'jobdesk' => $this->request->getVar('jobdesk')
        ];

        $where = ['id_loker' => $id_loker];

        $model->updateJob($where, $data);

        return redirect()->to(site_url('Job'));
    }
}

