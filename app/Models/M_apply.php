<?php

namespace App\Models;

use CodeIgniter\Model;

class M_Apply extends Model
{
    protected $table = 'form_pendaftaran';
    protected $primaryKey = 'id_form';
    protected $useAutoIncrement = true;
    protected $allowedFields = ['nama', 'jenkel', 'pend', 'email', 'no_telp', 'alamat', 'linkedin', 'surat_lamaran', 'cv', 'ktp', 'ijazah', 'skck', 'packlaring', 'sertifikat_kompentensi', 'id_loker', 'id_pengguna'];
}
