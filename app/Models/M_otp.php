<?php

namespace App\Models;

use CodeIgniter\Model;

class M_otp extends Model
{
    protected $table = 'pengguna';
    protected $primaryKey = 'id_pengguna';
    protected $useTimestamps = false;
    protected $allowedFields = ['email', 'code'];

    public function getUserByEmail($userEmail)
    {
        return $this->where('email', $userEmail)->first();
    }

    public function updateCode($userEmail, $code)
    {
        return $this->set(['code' => $code])->where('email', $userEmail)->update();
    }
}
