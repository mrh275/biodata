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
            'title'     => 'Beranda | Mini Dapodik',
        ];

        return view('admin/dashboard', $data);
    }

    //--------------------------------------------------------------------

}
