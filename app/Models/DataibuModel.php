<?php

namespace App\Models;

use CodeIgniter\Model;

class DataibuModel extends Model
{

    protected $allowedFields = ['nama_ibu', 'nik_ibu', 'tahun_lahir_ibu', 'pendidikan_ibu', 'pekerjaan_ibu', 'penghasilan_ibu'];

    public function add($data)
    {
        $this->db->table('data_ibu')->insert($data);
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
