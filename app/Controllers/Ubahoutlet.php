<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\M_outlet;

class UbahOutlet extends Controller
{
    public function index($id)
    {
        $model = new M_outlet();
        $data['outlet'] = $model->find($id);

        // Validasi jika pengguna tidak ditemukan
        if ($data['outlet'] === null) {
            // Tampilkan pesan kesalahan atau redirect ke halaman lain
            return redirect()->to('error');
        }

        return view('admin/v_ubah_outlet', ['outlet' => $data['outlet'], 'id' => $id]);

    }
    public function update($id)
    {
        $model = new M_outlet();
        $namaOutlet = $this->request->getPost('nama');
        $alamat = $this->request->getPost('alamat');
        $startDay = $this->request->getPost('startDay');
        $endDay = $this->request->getPost('endDay');
        $jamBuka = $this->request->getPost('jamBuka');
        $jamTutup = $this->request->getPost('jamTutup');
        $map = $this->request->getPost('map');
        $schedule = "{$startDay}-{$endDay} {$jamBuka}-{$jamTutup}";
        $data = [
            'nama' => $namaOutlet,
            'alamat' => $alamat,
            'jam' => $schedule,
            'map' => $map,
        ];

        if ($model->update($id, $data)) {
            return redirect()->to('/Outlet')->with('success', 'Berhasil Update Data Pengguna.');
        } else {
            return redirect()->to('/UbahOutlet')->with('error', 'Tidak Berhasil Update Data Pengguna');
        }
    }
}
