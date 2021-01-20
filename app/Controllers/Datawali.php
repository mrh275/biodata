<?php

namespace App\Controllers;

class Datawali extends BaseController
{
    public function index()
    {
        return view('front/form-wali');
    }

    public function add()
    {

        $data = [
            'nama_wali'         => $this->request->getVar('nama_wali'),
            'nik_wali'          => $this->request->getVar('nik_wali'),
            'tahun_lahir_wali'  => $this->request->getVar('tahun_lahir_wali'),
            'pendidikan_wali'   => $this->request->getVar('pendidikan_wali'),
            'pekerjaan_wali'    => $this->request->getVar('pekerjaan_wali'),
            'penghasilan_wali'  => $this->request->getVar('penghasilan_wali'),
            'created_at'        => date('Y-m-d')
        ];

        $this->dataWaliModel->add($data);

        return redirect()->to('/dataperiodik');
    }

    //--------------------------------------------------------------------

}
