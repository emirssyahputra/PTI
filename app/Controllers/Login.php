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
        $email = strip_tags(str_replace("'", "", $request->getPost('email')));
        $password = strip_tags(str_replace("'", "", $request->getPost('password')));

        $u = $email;
        $p = $password;

        $cadmin = $this->M_Login->cekadmin($u, $p);

        if ($cadmin) {
            session()->set('masuk', true);
            session()->set('user', $u);
            $xcadmin = $cadmin;

            if ($xcadmin['pengguna_level'] == '1') {
                session()->set('akses', '1');
                $idadmin = $xcadmin['pengguna_id'];
                $user_nama = $xcadmin['nama'];
                session()->set('idadmin', $idadmin);
                session()->set('nama', $user_nama);
                return redirect()->to('admin/dashboard'); // Ganti URL yang sesuai
            } else {
                session()->set('akses', '2');
                $idadmin = $xcadmin['pengguna_id'];
                $user_nama = $xcadmin['nama'];
                session()->set('idadmin', $idadmin);
                session()->set('nama', $user_nama);
                return redirect()->to('admin/jadwal'); // Ganti URL yang sesuai
            }
        } else {
            $error_message = 'Username atau Password Salah. Silakan coba lagi.';
            session()->setFlashdata('error', $error_message);
            return redirect()->to('Login');
        }
    }

    public function logout()
    {
        session()->destroy();
        return redirect()->to('Login');
    }
}
