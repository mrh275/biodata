<?php

namespace App\Models;

use CodeIgniter\Model;

class DataprogramkesejahteraanModel extends Model
{
    protected $allowedFields = ['nis', 'no_kip', 'file_kip', 'no_kis', 'file_kis', 'no_pkh', 'file_pkh'];

    public function add($data)
    {
        $this->db->table('program_kesejahteraan')->insert($data);
    }
}
