<?php

namespace App\Models;

use CodeIgniter\Model;

class M_Apply extends Model
{
    protected $table = 'form_pendaftaran';
    protected $primaryKey = 'id_form';
    protected $allowedFields = ['id_form', 'nama', 'jenkel', 'tempat_lahir', 'tanggal_lahir', 'pend', 'email', 'no_telp', 'no_hp', 'alamat', 'linkedin', 'surat_lamaran', 'cv', 'ktp', 'ijazah', 'skck', 'packlaring', 'sertifikat_kompetensi', 'berkas_pendukung', 'waktu_apply', 'id_loker', 'id_pengguna'];
    public function getLastApply()
    {
        $lastApply = $this->orderBy('id_form', 'DESC')->first();

        if ($lastApply) {
            $lastId = 'P' . str_pad((intval(substr($lastApply['id_form'], 1)) + 1), 4, '0', STR_PAD_LEFT);
            $lastApply['id_form'] = $lastId;
        } else {
            $lastApply['id_form'] = 'P0001';
        }

        return $lastApply;
    }

}
