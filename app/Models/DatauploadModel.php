<?php

namespace App\Models;

use CodeIgniter\Model;

class DatauploadModel extends Model
{
    protected $allowedFields = ['nis', 'file_ijazah', 'file_skhun', 'file_kk', 'file_akte'];

    public function add($data)
    {
        $this->db->table('data_upload')->insert($data);
    }
}
