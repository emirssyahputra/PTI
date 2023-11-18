<?php

namespace App\Controllers;

use App\Models\M_outlet;
use CodeIgniter\Controller;

class TambahOutlet extends BaseController
{
    public function index()
    {
        $sesi_pengguna_id = session()->get('idadmin');

    if ($sesi_pengguna_id) {
        return view('admin/v_tambah_outlet');
    } else {
        // Jika tidak ada sesi pengguna yang aktif, redirect ke halaman login
        return redirect()->to(site_url('login'));
    }

    }
    public function saveOutlet()
    {
        // Load the form helper
        helper('form');

        // Get form input data
        $namaOutlet = $this->request->getPost('nama');
        $alamat = $this->request->getPost('alamat');
        $startDay = $this->request->getPost('startDay');
        $endDay = $this->request->getPost('endDay');
        $jamBuka = $this->request->getPost('jamBuka');
        $jamTutup = $this->request->getPost('jamTutup');
        $map = $this->request->getPost('map');


        // Combine values into a single string
        $schedule = "{$startDay}-{$endDay} {$jamBuka}-{$jamTutup}";

        // Create an instance of the OutletModel
        $outletModel = new M_outlet();

        // Save the data to the database
        $outletModel->save([
            'nama' => $namaOutlet,
            'alamat' => $alamat,
            'jam' => $schedule,
            'map' => $map,
        ]);

        // Redirect to the desired page
        return redirect()->to(site_url('Outlet'));
    }
}
