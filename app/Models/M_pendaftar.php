<?php
namespace App\Models;

use CodeIgniter\Model;

class M_pendaftar extends Model
{
    protected $table = 'form_pendaftaran';
    protected $primaryKey = 'id_form';
    protected $allowedFields = ['status_adm', 'komentar_adm', 'status_wwc', 'komentar_wwc', 'status_uji', 'komentar_uji', 'status_akhir', 'komentar_akhir'];

    public function get_all_pendaftar()
    {
        return $this->findAll();
    }
    public function get_all_pendaftar_with_job()
    {
        return $this->select('form_pendaftaran.*, lowongan_pekerjaan.Nama AS nama_job, lowongan_pekerjaan.waktu_mulai, lowongan_pekerjaan.waktu_akhir')
            ->join('lowongan_pekerjaan', 'lowongan_pekerjaan.id_loker = form_pendaftaran.id_loker')
            ->findAll();
    }

    public function get_pendaftar_by_keyword($keyword)
    {
        return $this->select('form_pendaftaran.*, lowongan_pekerjaan.Nama AS nama_job, lowongan_pekerjaan.waktu_mulai, lowongan_pekerjaan.waktu_akhir')
            ->join('lowongan_pekerjaan', 'lowongan_pekerjaan.id_loker = form_pendaftaran.id_loker')
            ->like('form_pendaftaran.nama', $keyword)
            ->orLike('lowongan_pekerjaan.Nama', $keyword)
            ->orLike('lowongan_pekerjaan.waktu_mulai', $keyword)
            ->orLike('lowongan_pekerjaan.waktu_akhir', $keyword)
            ->findAll();
    }

    public function get_pendaftar_by_id($id_form)
    {
        return $this->select('form_pendaftaran.*, lowongan_pekerjaan.Nama AS nama_job, lowongan_pekerjaan.waktu_mulai, lowongan_pekerjaan.waktu_akhir')
            ->join('lowongan_pekerjaan', 'lowongan_pekerjaan.id_loker = form_pendaftaran.id_loker')
            ->where('id_form', $id_form)
            ->first();
    }

    public function updateStatus($where, $data)
    {
        return $this->update($where, $data);
    }

}