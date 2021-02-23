<?php

namespace App\Controllers;

class Dashboard extends BaseController
{
    public function index()
    {
        $data = [
            'menu'      => 'dashboard',
            'listMenu'  => $this->menuModel->getMenu(),
            'submenuSlug'   => '',
        ];

        return view('admin/dashboard', $data);
    }

    //--------------------------------------------------------------------

}
