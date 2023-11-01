<?php namespace App\Models;

use CodeIgniter\Model;

class M_career extends Model
{
    protected $table = 'lowongan_pekerjaan'; 
    protected $primaryKey = 'id_loker';
    public function get_all_lowongan()
    {
        return $this->findAll();
    }
 
}
