<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\M_selection;

class Selection extends BaseController
{
    public function index()
    {
        $sesi_pengguna_id = session()->get('idadmin');

        if ($sesi_pengguna_id) {
            $session = \Config\Services::session();
        $id_pengguna = $session->get('id_pengguna');

        $model = new M_selection();

        $data = $model->orderBy('waktu_apply', 'desc')
            ->getFormByUserId($id_pengguna);

        $viewData = [
            'Nama' => null,
            'waktu_apply' => null,
            'status_adm' => null,
            'komentar_adm' => null,
            'status_wwc' => null,
            'komentar_wwc' => null,
            'status_uji' => null,
            'komentar_uji' => null,
            'status_akhir' => null,
            'komentar_akhir' => null,
        ];

        if (!empty($data)) {
            $id_loker = $data['id_loker'];
            $Nama = $model->getNamaPekerjaan($id_loker);
            $waktu_apply = date('d F Y', strtotime($data['waktu_apply']));

            $viewData = [
                'Nama' => $Nama,
                'waktu_apply' => $waktu_apply,
                'status_adm' => $data['status_adm'],
                'komentar_adm' => $data['komentar_adm'],
                'status_wwc' => $data['status_wwc'],
                'komentar_wwc' => $data['komentar_wwc'],
                'status_uji' => $data['status_uji'],
                'komentar_uji' => $data['komentar_uji'],
                'status_akhir' => $data['status_akhir'],
                'komentar_akhir' => $data['komentar_akhir'],
            ];
        }

        return view('pelamar/v_selection', $viewData);
        } else {
            // Jika tidak ada sesi pengguna yang aktif, redirect ke halaman login
            return redirect()->to(site_url('login'));
        }
        
    }

}
