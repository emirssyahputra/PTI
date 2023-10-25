<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\M_Login;

class Login extends BaseController
{
    protected $M_Login; // Gunakan properti yang dideklarasikan dengan benar

    public function __construct()
    {
        $this->M_Login = new M_Login();
    }

    public function index()
    {
        return view('v_login');
    }

    public function auth()
    {
        $request = service('request');
        $username = strip_tags(str_replace("'", "", $request->getPost('username')));
        $password = strip_tags(str_replace("'", "", $request->getPost('password')));

        $u = $username;
        $p = $password;

        $cadmin = $this->M_Login->cekadmin($u, $p);

        if ($cadmin->getNumRows() > 0) {
            session()->set('masuk', true);
            session()->set('user', $u);
            $xcadmin = $cadmin->getRowArray();

            if ($xcadmin['pengguna_level'] == '1') {
                session()->set('akses', '1');
                $idadmin = $xcadmin['pengguna_id'];
                $user_nama = $xcadmin['pengguna_nama'];
                session()->set('idadmin', $idadmin);
                session()->set('nama', $user_nama);
                return redirect()->to('admin/dashboard'); // Ganti URL yang sesuai
            } else {
                session()->set('akses', '2');
                $idadmin = $xcadmin['pengguna_id'];
                $user_nama = $xcadmin['pengguna_nama'];
                session()->set('idadmin', $idadmin);
                session()->set('nama', $user_nama);
                return redirect()->to('admin/jadwal'); // Ganti URL yang sesuai
            }
        } else {
            session()->setFlashdata('msg', '<div class="alert alert-danger" role="alert"><button type="button" class="close" data-dismiss="alert"><span class="fa fa-close"></span></button> Username Atau Password Salah</div>');
            return redirect()->to('v_login');
        }
    }

    public function logout()
    {
        session()->destroy();
        return redirect()->to('v_login');
    }
}
