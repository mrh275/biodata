<?php

namespace App\Models;

use CodeIgniter\Model;

class DataperiodikModel extends Model
{
    protected $allowedFields = ['nis', 'asal_sekolah', 'nomor_peserta_un', 'nomor_seri_ijazah', 'nomor_seri_skhun', 'tinggi_badan', 'berat_badan', 'hobi', 'cita_cita', 'jarak_tempuh', 'waktu_tempuh', ''];

    public function add($data)
    {
        $this->db->table('data_periodik')->insert($data);
    }
}
