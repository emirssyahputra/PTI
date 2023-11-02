<?php namespace App\Models;

use CodeIgniter\Model;

class M_pengguna extends Model
{
    protected $table = 'pengguna'; 
    protected $primaryKey = 'id_pengguna'; 
    protected $allowedFields = ['email', 'nama','password', 'id_role'];
}
