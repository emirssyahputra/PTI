<?php

namespace App\Models;

use CodeIgniter\Model;

class M_Login extends Model
{
    protected $table = 'pengguna';
    protected $primaryKey = 'id_pengguna';
    protected $allowedFields = ['email', 'password'];

    public function cekadmin($u, $p)
    {
    $user = $this->where('email', $u)->get()->getRow();

    if ($user && password_verify($p, $user->password)) {
        return $user;
    }

    return null;
    }
}
