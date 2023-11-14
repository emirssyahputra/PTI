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

    public function get_lowongan_berjalan()
    {
        // Ambil waktu sekarang (timezone Asia/Jakarta)
        $now = new \DateTime('now', new \DateTimeZone('Asia/Jakarta'));

        // Format waktu sekarang menjadi Y-m-d untuk membandingkan hanya tanggal
        $nowDate = $now->format('Y-m-d');

        return $this->where('waktu_mulai <=', $nowDate)
                    ->where('waktu_akhir >=', $nowDate)
                    ->findAll();
    }
}
