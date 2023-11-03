<?php

namespace App\Controllers;

use App\Models\M_login;
use CodeIgniter\Controller;

class Login extends Controller
{
    protected $m_login;

    public function __construct()
    {
        $this->m_login = new M_login();
    }

    public function index()
    {
        return view('v_login');
    }

    public function cek()
    {
        $username = $this->request->getVar('email');
        $password = $this->request->getVar('password');

        $u = strip_tags(str_replace("'", "", $username));
        $p = strip_tags(str_replace("'", "", $password));

        $cadmin = $this->m_login->cekadmin($u, $p);

        if ($cadmin) {
            session()->set('masuk', true);
            session()->set('user', $u);
            $session = \Config\Services::session();
            $userdata = [
                'id_pengguna' => $cadmin->id_pengguna,
                'nama' => $cadmin->nama,
                'email' => $cadmin->email,
            ];
            $session->set($userdata);

            if ($cadmin->id_role == '1') {
                session()->set('akses', '1');
                $idadmin = $cadmin->id_pengguna;
                $user_nama = $cadmin->nama;
                session()->set('idadmin', $idadmin);
                session()->set('namaa', $user_nama);
                return redirect()->to(base_url('Dashboard'));
            } else {
                session()->set('akses', '2');
                $idadmin = $cadmin->id_pengguna;
                $user_nama = $cadmin->nama;
                session()->set('idadmin', $idadmin);
                session()->set('namaa', $user_nama);
                return redirect()->to(base_url('pCareer'));
            }
        } else {
            $error_message = 'Email atau Password Salah. Silakan coba lagi.';
            session()->setFlashdata('error', $error_message);
            return redirect()->to('login');
        }

    }

    public function logout()
    {
        $session = \Config\Services::session();
        $session->destroy();

        return redirect()->to(base_url('login'));
    }

}
