<?php

namespace App\Models;

use CodeIgniter\Model;

class M_Login extends Model
{
    protected $table = 'tbl_pengguna';
    protected $primaryKey = 'pengguna_id';
    protected $allowedFields = ['pengguna_username', 'pengguna_password'];

    public function cekadmin($u, $p)
    {
        return $this->where('pengguna_username', $u)
                    ->where('pengguna_password', md5($p))
                    ->get();
    }
}
