<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\M_Apply;

class Apply extends BaseController
{
    public function index()
    {
        $session = \Config\Services::session();
        $id_pengguna = $session->get('id_pengguna');
        $nama = $session->get('nama');
        $email = $session->get('email');
        $id_loker = $this->request->getPost('id_loker');

        if ($id_pengguna === null) {
            return redirect()->to('login'); // Mengarahkan pengguna ke halaman login jika belum masuk.
        }

        $data = [
            'nama' => $nama,
            'email' => $email,
            'id_loker' => $id_loker,
        ];

        return view('pelamar/v_apply', $data); // Menampilkan halaman apply jika pengguna sudah masuk.
    }


    public function apply()
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

        // Mengambil nilai id_loker dari POST data

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
            // Memasukkan id_loker ke dalam data
        ];

        // Menambahkan nama file yang diunggah ke dalam data
        foreach ($fileFields as $field) {
            if (isset($uploadedFiles[$field])) {
                $data[$field] = $uploadedFiles[$field];
            }
        }

        if ($model->insert($data)) {
            return redirect()->to('pelamar/selection')->with('success', 'Lamaran berhasil dikirim.');
        } else {
            return redirect()->to('pelamar/apply')->with('error', 'Gagal mengirim lamaran. Silakan coba lagi.');
        }
    }

}
