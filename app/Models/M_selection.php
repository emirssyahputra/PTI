<?php namespace App\Models;

use CodeIgniter\Model;

class M_selection extends Model
{
    protected $table = 'form_pendaftaran'; 
    protected $primaryKey = 'id_form';

    public function getFormByUserId($id_pengguna)
    {
        // Mengambil data berdasarkan ID pengguna
        return $this->where('id_pengguna', $id_pengguna)->first();
    }

    public function loker()
    {
        return $this->belongsTo('App\Models\M_career', 'id_loker', 'id_loker');
    }

    // Metode untuk mengambil nama pekerjaan
    public function getNamaPekerjaan($id_loker)
{
    $lokerModel = new M_career();
    $loker = $lokerModel->find($id_loker);
    
    if ($loker) {
        return $loker['Nama'];
    } else {
        return "Pekerjaan Tidak Ditemukan";
    }
}
}
