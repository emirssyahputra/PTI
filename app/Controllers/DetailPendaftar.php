<?php

namespace App\Controllers;

class DetailPendaftar extends BaseController
{
    public function index($id_form)
    {
        $sesi_pengguna_id = session()->get('idadmin');

        if ($sesi_pengguna_id) {
            $model = new \App\Models\M_pendaftar();
            $data['pendaftar'] = $model->get_pendaftar_by_id($id_form);

            return view('admin/v_detail_pendaftar', $data);
        } else {
            return redirect()->to(site_url('login'));
        }
    }
    public function downloadFile($filename)
    {
        $file = FCPATH . 'doc\\' . $filename;

        // Check if the file exists
        if (file_exists($file)) {
            $data['file_path'] = $file;
    
            // Load a view to display the file content
            return view('admin/v_views_file', $data);
        } else {
            // File not found, you may want to handle this case accordingly
            return "File not found";
        }
    }
}