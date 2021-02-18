<?php

namespace App\Models;

use CodeIgniter\Model;

class DataayahModel extends Model
{
    protected $table = 'biodata_siswa';
    protected $useTimestamps = true;
    protected $allowedFields = ['nama_ayah', 'nik_ayah', 'tahun_lahir_ayah', 'pendidikan_ayah', 'pekerjaan_ayah', 'penghasilan_ayah'];

    public function add($data)
    {
        $this->db->table('data_ayah')->insert($data);
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
