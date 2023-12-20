<?php

namespace App\Controllers;

use App\Models\M_job;
use CodeIgniter\Controller;

class TambahJob extends BaseController
{
    public function index()
    {
        $sesi_pengguna_id = session()->get('idadmin');
        $akses_pengguna = session()->get('akses');

    if ($sesi_pengguna_id) {
        if ($akses_pengguna == 1) {
        return view('admin/v_tambah_job.php');
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
    public function saveJob()
    {
        $model = new M_job();

        $jobData = [
            'Nama' => $this->request->getPost('Nama'),
            'waktu_mulai' => $this->request->getPost('waktu_mulai'),
            'waktu_akhir' => $this->request->getPost('waktu_akhir'),
            'kualifikasi' => $this->request->getPost('kualifikasi'),
            'jobdesk' => $this->request->getPost('jobdesk'),
        ];

        $lastJob = $model->orderBy('id_loker', 'DESC')->first();
        if ($lastJob) {
            $lastId = 'JOB' . str_pad((intval(substr($lastJob['id_loker'], 3)) + 1), 4, '0', STR_PAD_LEFT);
        } else {
            $lastId = 'JOB0001';
        }

        $jobData['id_loker'] = $lastId;

        $model->insert($jobData);

        return redirect()->to(site_url('Job'));
    }

}
