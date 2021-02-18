<?php

namespace App\Models;

use CodeIgniter\Model;

class BiodataModel extends Model
{
    protected $table = 'biodata_siswa';
    protected $useTimestamps = true;
    protected $allowedFields = ['nama', 'jenis_kelamin', 'kelas', 'nis', 'nisn', 'nik', 'no_kk', 'anak_ke_berapa', 'tempat_lahir', 'tanggal_lahir', 'no_akte', 'agama', 'alamat', 'rt', 'rw', 'dusun', 'desa', 'kecamatan', 'pos', 'tempat_tinggal', 'transportasi'];

    public function add($data)
    {
        $this->db->table('biodata_siswa')->insert($data);
    }

    public function getJK()
    {
        return $this->db->table('jenis_kelamin')->get()->getResultArray();
    }

    public function getKelas()
    {
        return $this->db->table('kelas')->get()->getResultArray();
    }

    public function getAgama()
    {
        return $this->db->table('agama')->get()->getResultArray();
    }

    public function getTinggal()
    {
        return $this->db->table('tempat_tinggal')->get()->getResultArray();
    }

    public function getTransportasi()
    {
        return $this->db->table('transportasi')->get()->getResultArray();
    }
}
