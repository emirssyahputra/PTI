<?php

namespace App\Controllers;
use App\Models\M_selection;


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
        $datas['pendaftar'] = $model->get_pendaftar_by_id($id_form);
        $emailPendaftar = $datas['pendaftar']['email'];
        $modelselection = new M_selection();
        $job = $datas['pendaftar']['id_loker'];
        $loker = $modelselection->getNamaPekerjaan($job);
        $status = $data['status_adm'];
        if ($status == 1) {
            $kataStatus = "<strong>Lolos</strong>";
        }else { 
            $kataStatus = "<strong>Tidak Lolos</strong>";
        }
        $subject = "Status Tahapan Seleksi";
        $message = "Anda dinyatakan $kataStatus pada tahap seleksi <strong>administrasi</strong> untuk posisi <strong>$loker</strong>, silahkan cek tahapan seleksi pada website untuk informasi lebih lanjut ";

        $email = service('email');
        $email->setTo($emailPendaftar);
        $email->setFrom('emirssyah2@gmail.com', 'Loer Group');
        $email->setSubject($subject);
        $email->setMessage($message);
        $email->send();

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

        $datas['pendaftar'] = $model->get_pendaftar_by_id($id_form);
        $emailPendaftar = $datas['pendaftar']['email'];
        $modelselection = new M_selection();
        $job = $datas['pendaftar']['id_loker'];
        $loker = $modelselection->getNamaPekerjaan($job);
        $status = $data['status_wwc'];
        if ($status == 1) {
            $kataStatus = "<strong>Lolos</strong>";
        }else { 
            $kataStatus = "<strong>Tidak Lolos</strong>";
        }
        $subject = "Status Tahapan Seleksi";
        $message = "Anda dinyatakan $kataStatus pada tahap seleksi <strong>wawancara</strong> untuk posisi <strong>$loker</strong>, silahkan cek tahapan seleksi pada website untuk informasi lebih lanjut ";

        $email = service('email');
        $email->setTo($emailPendaftar);
        $email->setFrom('emirssyah2@gmail.com', 'Loer Group');
        $email->setSubject($subject);
        $email->setMessage($message);
        $email->send();

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

        $datas['pendaftar'] = $model->get_pendaftar_by_id($id_form);
        $emailPendaftar = $datas['pendaftar']['email'];
        $modelselection = new M_selection();
        $job = $datas['pendaftar']['id_loker'];
        $loker = $modelselection->getNamaPekerjaan($job);
        $status = $data['status_uji'];
        if ($status == 1) {
            $kataStatus = "<strong>Lolos</strong>";
        }else { 
            $kataStatus = "<strong>Tidak Lolos</strong>";
        }
        $subject = "Status Tahapan Seleksi";
        $message = "Anda dinyatakan $kataStatus pada tahap seleksi <strong>uji kemampuan</strong> untuk posisi <strong>$loker</strong>, silahkan cek tahapan seleksi pada website untuk informasi lebih lanjut ";

        $email = service('email');
        $email->setTo($emailPendaftar);
        $email->setFrom('emirssyah2@gmail.com', 'Loer Group');
        $email->setSubject($subject);
        $email->setMessage($message);
        $email->send();

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

        $datas['pendaftar'] = $model->get_pendaftar_by_id($id_form);
        $emailPendaftar = $datas['pendaftar']['email'];
        $modelselection = new M_selection();
        $job = $datas['pendaftar']['id_loker'];
        $loker = $modelselection->getNamaPekerjaan($job);
        $status = $data['status_akhir'];
        if ($status == 1) {
            $kataStatus = "<strong>Lolos</strong>";
        }else { 
            $kataStatus = "<strong>Tidak Lolos</strong>";
        }
        $subject = "Status Tahapan Seleksi";
        $message = "Anda dinyatakan $kataStatus pada posisi <strong>$loker</strong>, silahkan cek tahapan seleksi pada website untuk info lebih lanjut ";

        $email = service('email');
        $email->setTo($emailPendaftar);
        $email->setFrom('emirssyah2@gmail.com', 'Loer Group');
        $email->setSubject($subject);
        $email->setMessage($message);
        $email->send();

        return redirect()->to(site_url('Pendaftar'));
    }
}
