<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\M_Apply;
use App\Models\M_selection;


class Apply extends BaseController
{
    public function index()
    {
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
                    return redirect()->to('pCareer')->with('error', 'Anda sebelumnya telah mendaftar, silahkan periksa ke halaman selection. Anda dapat mendaftar lagi ketika status seleksi Anda tidak lolos');
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
    }


    public function daftar()
    {
        $model = new M_Apply();

        // Array untuk menyimpan nama file yang diunggah
        $uploadedFiles = [];

        // Daftar nama field file
        $fileFields = ['surat_lamaran', 'cv', 'ktp', 'ijazah', 'skck', 'packlaring', 'sertifikat_kompetensi'];

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
                $file->move(ROOTPATH . 'writable' . DIRECTORY_SEPARATOR, $newName);
                $uploadedFiles[$field] = $newName;
            }
        }

        // Data untuk disimpan dalam basis data
        $data = [
            'id_pengguna' => $id_pengguna,
            'nama' => $nama,
            'email' => $email,
            'jenkel' => $this->request->getVar('jenkel'),
            'pend' => $this->request->getVar('pend'),
            'no_telp' => $this->request->getVar('no_telp'),
            'alamat' => $this->request->getVar('alamat'),
            'linkedin' => $this->request->getVar('linkedin'),
            'id_loker' => $this->request->getVar('id_loker'),
            'waktu_apply' => $waktuApply,
        ];

        // Menambahkan nama file yang diunggah ke dalam data
        foreach ($fileFields as $field) {
            if (isset($uploadedFiles[$field])) {
                $data[$field] = $uploadedFiles[$field];
            }
        }

        if ($model->insert($data)) {
            $model = new M_selection();
            $id_loker = $data['id_loker'];
            $waktu = $data['waktu_apply'];
            $loker = $model->getNamaPekerjaan($id_loker);
            $subject = "Status Tahapan Seleksi";
            $message = "Selamat anda berhasil mendaftar untuk posisi $loker pada $waktu ";

            $email = service('email');
            $email->setTo($data['email']);
            $email->setFrom('emirssyah2@gmail.com', 'Loer Group');
            $email->setSubject($subject);
            $email->setMessage($message);
            $email->send();
            return redirect()->to('Selection')->with('success', 'Lamaran berhasil dikirim.');
        } else {
            return redirect()->to('Apply')->with('error', 'Gagal mengirim lamaran. Silakan coba lagi.');
        }
    }

}
