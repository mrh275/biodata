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
}
