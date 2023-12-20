<?php

namespace App\Controllers;

class DetailPendaftar extends BaseController
{
    public function index($id_form)
    {
        $sesi_pengguna_id = session()->get('idadmin');
        $akses_pengguna = session()->get('akses');

        if ($sesi_pengguna_id) {
            if ($akses_pengguna == 1) {
            $model = new \App\Models\M_pendaftar();
            $data['pendaftar'] = $model->get_pendaftar_by_id($id_form);

            return view('admin/v_detail_pendaftar', $data);
            } else {
            // Jika akses tidak sama dengan 1, lakukan logout dan redirect ke halaman login
            session()->destroy();
            return redirect()->to(site_url('login'));
        }
        } else {
            return redirect()->to(site_url('login'));
        }
    }
   public function downloadFile($filename)
{
    $file = FCPATH . 'doc/' . $filename;

    return $this->response->download($file, null);
}

}