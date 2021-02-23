<?php

namespace App\Models;

use CodeIgniter\Model;

class AdminModel extends Model
{
    public function getAllMenu()
    {
        return $this->db->table('menu')->get()->getResultArray();
    }
}
