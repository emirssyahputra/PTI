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
        return $this->where('email', $u)
                    ->where('password', md5($p))
                    ->get();
    }
}
