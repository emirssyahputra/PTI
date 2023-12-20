<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\M_apply;
use App\Models\M_selection;


class Apply extends BaseController
{
    public function index()
    {
        $sesi_pengguna_id = session()->get('idadmin');
        $akses_pengguna = session()->get('akses');
        
        if ($akses_pengguna == 2) {
        date_default_timezone_set('Asia/Jakarta');
        $session = \Config\Services::session();
        $id_pengguna = $session->get('id_pengguna');
        $nama = $session->get('nama');
        $email = $session->get('email');
        $id_loker = $this->request->getPost('id_loker');
        $waktuApply = date('Y-m-d H:i:s');

        $model = new M_selection();

        $data_status = $model->orderBy('waktu_apply', 'desc')
            ->getFormByUserId($id_pengguna);

        if ($id_pengguna === null) {
            return redirect()->to('login'); // Mengarahkan pengguna ke halaman login jika belum masuk.
        } else {
            if (!empty($data_status)) {
                $status_adm = $data_status['status_adm'];
                $status_wwc = $data_status['status_wwc'];
                $status_uji = $data_status['status_uji'];
                $status_akhir = $data_status['status_akhir'];

                if ($status_adm !== '2' && $status_wwc !== '2' && $status_uji !== '2' && $status_akhir !== '2') {
                    return redirect()->to('pCareer')->with('error', 'Anda sebelumnya telah mendaftar, silahkan periksa ke halaman Selection. Anda dapat mendaftar lagi ketika status seleksi anda Tidak Lolos');
                }
            }
        }

        $data_pelamar = [
            'nama' => $nama,
            'email' => $email,
            'id_loker' => $id_loker,
            'waktuApply' => $waktuApply,
        ];

        return view('pelamar/v_apply', $data_pelamar); // Menampilkan halaman apply jika pengguna sudah masuk.
        } else {
            
            session()->destroy();
            return redirect()->to(site_url('login'));
        }
    }


    public function daftar()
    {
        $model = new M_apply();

        // Array untuk menyimpan nama file yang diunggah
        $uploadedFiles = [];

        // Daftar nama field file
        $fileFields = ['surat_lamaran', 'cv', 'ktp', 'ijazah', 'skck', 'packlaring', 'sertifikat_kompetensi', 'berkas_pendukung'];

        $session = \Config\Services::session();
        $id_pengguna = $session->get('id_pengguna');
        $nama = $session->get('nama');
        $email = $session->get('email');

        date_default_timezone_set('Asia/Jakarta');
        $waktuApply = date('Y-m-d H:i:s');

        // Loop melalui setiap field file
        foreach ($fileFields as $field) {
            $file = $this->request->getFile($field);

            if ($file->isValid()) {
                $newName = $file->getRandomName();
                $file->move(ROOTPATH . 'public/doc' . DIRECTORY_SEPARATOR, $newName);
                $uploadedFiles[$field] = $newName;
            }
        }

        // Data untuk disimpan dalam basis data
        $data = [
            'id_pengguna' => $id_pengguna,
            'nama' => $nama,
            'email' => $email,
            'jenkel' => $this->request->getVar('jenkel'),
            'tempat_lahir' => $this->request->getVar('tempat_lahir'),
            'tanggal_lahir' => $this->request->getVar('tanggal_lahir'),
            'pend' => $this->request->getVar('pend'),
            'no_telp' => $this->request->getVar('no_telp'),
            'no_hp' => $this->request->getVar('no_hp'),
            'alamat' => $this->request->getVar('alamat'),
            'linkedin' => $this->request->getVar('linkedin'),
            'id_loker' => $this->request->getVar('id_loker'),
            'waktu_apply' => $waktuApply,
        ];

        $lastApply = $model->orderBy('id_form', 'DESC')->first();
        if ($lastApply) {
            $lastId = 'P' . str_pad((intval(substr($lastApply['id_form'], 1)) + 1), 4, '0', STR_PAD_LEFT);
        } else {
            $lastId = 'P0001';
        }
        
        $data['id_form'] = $lastId;        

        foreach ($fileFields as $field) {
            if (isset($uploadedFiles[$field])) {
                $data[$field] = $uploadedFiles[$field];
            }
        }
        
        $model->insert($data);
        $modelselection = new M_selection();
        $id_loker = $data['id_loker'];
        $waktu = $data['waktu_apply'];
        $loker = $modelselection->getNamaPekerjaan($id_loker);
        $subject = "Status Tahapan Seleksi";
        $message = "Hi Loer!<br><br>Selamat anda berhasil mendaftar untuk posisi <strong>$loker</strong> pada <strong>$waktu</strong> Silahkan cek tahapan seleksi pada website kami secara berkala untuk informasi selanjutnya.<br><br>Salam Sedoloer…<br>#TimLoerGroup";

        $email = service('email');
        $email->setTo($data['email']);
        $email->setFrom('nadya@loergroup.com', 'Loer Group No Reply');
        $email->setSubject($subject);
        $email->setMessage($message);
        $email->send();
        return redirect()->to('Selection')->with('success', 'Lamaran berhasil dikirim.');
    }

}
