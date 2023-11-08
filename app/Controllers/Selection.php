<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\M_selection;

class Selection extends BaseController
{
    public function index()
{
    // Peroleh ID pengguna dari sesi
    $session = \Config\Services::session();
    $id_pengguna = $session->get('id_pengguna');

    // Membuat instance model
    $model = new M_selection();

    // Mengambil data berdasarkan ID pengguna
    $data = $model->getFormByUserId($id_pengguna);

    // Inisialisasi semua variabel ke null
    $Nama = null;
    $waktu_apply = null;
    $status_adm = null;
    $komentar_adm = null;
    $status_wwc = null;
    $komentar_wwc = null;
    $status_uji = null;
    $komentar_uji = null;
    $status_akhir = null;
    $komentar_akhir = null;

    if (!empty($data)) {
        if (isset($data['id_loker'])) {
            $id_loker = $data['id_loker'];
            $Nama = $model->getNamaPekerjaan($id_loker);
        }

        $waktu_apply = date('d F Y', strtotime($data['waktu_apply']));
        $status_adm = $data['status_adm'];
        $komentar_adm = $data['komentar_adm'];
        $status_wwc = $data['status_wwc'];
        $komentar_wwc = $data['komentar_wwc'];
        $status_uji = $data['status_uji'];
        $komentar_uji = $data['komentar_uji'];
        $status_akhir = $data['status_akhir'];
        $komentar_akhir = $data['komentar_akhir'];
    }

    $viewData = [
        'Nama' => $Nama,
        'waktu_apply' => $waktu_apply,
        'status_adm' => $status_adm,
        'komentar_adm' => $komentar_adm,
        'status_wwc' => $status_wwc,
        'komentar_wwc' => $komentar_wwc,
        'status_uji' => $status_uji,
        'komentar_uji' => $komentar_uji,
        'status_akhir' => $status_akhir,
        'komentar_akhir' => $komentar_akhir,
    ];

    return view('pelamar/v_selection', $viewData);
}


}
