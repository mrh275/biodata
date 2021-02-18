<?php

namespace App\Models;

use CodeIgniter\Model;

class DatawaliModel extends Model
{
    protected $allowedFields = ['nama_wali', 'nik_wali', 'tahun_lahir_wali', 'pendidikan_wali', 'pekerjaan_wali', 'penghasilan_wali'];

    public function add($data)
    {
        $this->db->table('data_wali')->insert($data);
    }

    public function getPendidikan()
    {
        return $this->db->table('pendidikan_terakhir')->get()->getResultArray();
    }

    public function getPekerjaan()
    {
        return $this->db->table('pekerjaan')->get()->getResultArray();
    }

    public function getPenghasilan()
    {
        return $this->db->table('penghasilan_bulanan')->get()->getResultArray();
    }
}
