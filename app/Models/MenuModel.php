<?php

namespace App\Models;

use CodeIgniter\Model;

class MenuModel extends Model
{
    protected $table = 'biodata_siswa';
    public function getMenu()
    {
        return $this->db->table('menu')->get()->getResultArray();
    }

    public function getSubMenu($menuId)
    {
        $querySubMenu = "SELECT *
                FROM `submenu` JOIN `menu`
                ON `submenu`.`menu_id` = `menu`.`id`
                WHERE `submenu`.`menu_id` = $menuId
                AND `submenu`.`active` = 1
            ";
        return $this->db->query($querySubMenu)->getResultArray();
    }

    public function getSubmenuBy($submenu)
    {
        return $this->db->table('submenu')->where(['slug_submenu' => $submenu])->get()->getRowArray();
    }
}
