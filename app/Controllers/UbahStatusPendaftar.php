<?php

namespace App\Controllers;

class UbahStatusPendaftar extends BaseController
{
    public function index($id_form)
    {
        $sesi_pengguna_id = session()->get('idadmin');

        if ($sesi_pengguna_id) {
            $model = new \App\Models\M_pendaftar();
            $data['pendaftar'] = $model->get_pendaftar_by_id($id_form);

            return view('admin/v_ubah_status', $data);
        } else {
            return redirect()->to(site_url('login'));
        }
    }

    public function updateStatusAdm()
    {
        $model = new \App\Models\M_pendaftar();

        $id_form = $this->request->getVar('id_form');
        $data = [
            'status_adm' => $this->request->getVar('status_adm'),
            'komentar_adm' => $this->request->getVar('komentar_adm'),
        ];

        $where = ['id_form' => $id_form];
        $model->updateStatus($where, $data);  // Panggil method updateStatus

        return redirect()->to(site_url('Pendaftar'));
    }
    public function updateStatusWwc()
    {
        $model = new \App\Models\M_pendaftar();

        $id_form = $this->request->getVar('id_form');
        $data = [
            'status_wwc' => $this->request->getVar('status_wwc'),
            'komentar_wwc' => $this->request->getVar('komentar_wwc'),
        ];

        $where = ['id_form' => $id_form];
        $model->updateStatus($where, $data);  // Panggil method updateStatus

        return redirect()->to(site_url('Pendaftar'));
    }
    public function updateStatusUji()
    {
        $model = new \App\Models\M_pendaftar();

        $id_form = $this->request->getVar('id_form');
        $data = [
            'status_uji' => $this->request->getVar('status_uji'),
            'komentar_uji' => $this->request->getVar('komentar_uji'),
        ];

        $where = ['id_form' => $id_form];
        $model->updateStatus($where, $data);  // Panggil method updateStatus

        return redirect()->to(site_url('Pendaftar'));
    }
    public function updateStatusAkhir()
    {
        $model = new \App\Models\M_pendaftar();

        $id_form = $this->request->getVar('id_form');
        $data = [
            'status_akhir' => $this->request->getVar('status_akhir'),
            'komentar_akhir' => $this->request->getVar('komentar_akhir')
        ];

        $where = ['id_form' => $id_form];
        $model->updateStatus($where, $data);  // Panggil method updateStatus

        return redirect()->to(site_url('Pendaftar'));
    }
}
