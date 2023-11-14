<?php

namespace App\Controllers;

use App\Models\M_job;
use CodeIgniter\Controller;

class TambahJob extends BaseController
{
    public function index()
    {
        return view('admin/v_tambah_job.php');
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
