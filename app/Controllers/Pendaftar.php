<?php

namespace App\Controllers;

use CodeIgniter\Controller;

class Pendaftar extends BaseController
{
    public function index()
    {
        $sesi_pengguna_id = session()->get('idadmin');

        if ($sesi_pengguna_id) {
            $model = new \App\Models\M_pendaftar();
            $keyword = $this->request->getPost('pencarian');

            if (!empty($keyword)) {
                $data['pendaftar'] = $model->get_pendaftar_by_keyword($keyword);
            } else {
                $data['pendaftar'] = $model->get_all_pendaftar_with_job();
            }

            return view('admin/v_pendaftar', $data);
        } else {
            return redirect()->to(site_url('login'));
        }
    }


    public function hapus($id_form)
    {
        $model = new \App\Models\M_pendaftar();
        $model->delete($id_form);
        return redirect()->to(site_url('Pendaftar'));
    }


}
