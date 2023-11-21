<?php

namespace App\Controllers;

use CodeIgniter\Controller;

class Job extends BaseController
{
    public function index()
    {
        $sesi_pengguna_id = session()->get('idadmin');

        if ($sesi_pengguna_id) {
            $model = new \App\Models\M_job();
            $data['job'] = $model->findAll();
            return view('admin/v_job', $data);
        } else {
            return redirect()->to(site_url('login'));
        }
    }
    public function search()
    {
        $keyword = $this->request->getPost('pencarian');

        $model = new \App\Models\M_job();

        $data['job'] = $model
            ->groupStart()
            ->like('id_loker', $keyword, 'both', null, true)
            ->orLike('Nama', $keyword, 'both', null, true)
            ->groupEnd()
            ->findAll();

        return view('admin/v_job', $data);
    }

    public function hapus($id_loker)
    {
        $model = new \App\Models\M_job();
        $job = $model->find($id_loker);

        if ($job) {
            $model->delete($id_loker);
            return redirect()->to(site_url('Job'));
        } else {
            return redirect()->to(site_url('Job'));
        }
    }
}
