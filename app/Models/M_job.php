<?php
namespace App\Models;

use CodeIgniter\Model;

class M_job extends Model
{
    protected $table = 'lowongan_pekerjaan';
    protected $primaryKey = 'id_loker';
    protected $allowedFields = ['id_loker', 'Nama', 'waktu_mulai', 'waktu_akhir', 'kualifikasi', 'jobdesk'];

    public function hapusjob($id_loker)
    {
        return $this->delete($id_loker);
    }
    public function getLastJob()
    {
        return $this->orderBy('id_loker', 'DESC')->first();
    }
    public function getJobById($id_loker)
    {
        return $this->where('id_loker', $id_loker)->first();
    }
    public function updateJob($where, $data)
    {
        return $this->update($where, $data);
    }


}