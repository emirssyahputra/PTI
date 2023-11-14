<?php

namespace App\Controllers;

use CodeIgniter\Controller;

class Job extends BaseController
{
    public function index()
    {
        $model = new \App\Models\M_job();
        $data['job'] = $model->findAll();
        return view('admin/v_job', $data);
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
        // Cek apakah pengguna dengan ID_loker yang diberikan ada
        $job = $model->find($id_loker);

        if ($job) {
            // Hapus pengguna dengan ID_loker yang diberikan
            $model->delete($id_loker); // Memanggil fungsi hapusjob pada model
            // Redirect kembali ke halaman pengguna setelah penghapusan
            return redirect()->to(site_url('Job'));
        } else {
            // Jika pengguna tid_lokerak ditemukan, Anda dapat menampilkan pesan kesalahan atau melakukan tindakan lain sesuai kebutuhan.
            return redirect()->to(site_url('Job'));
        }
    }


}
