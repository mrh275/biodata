<?php

namespace App\Controllers;

class Dataibu extends BaseController
{
    public function index()
    {
        return view('front/form-ibu');
    }

    public function add()
    {

        $data = [
            'nama_ibu'         => $this->request->getVar('nama_ibu'),
            'nik_ibu'          => $this->request->getVar('nik_ibu'),
            'tahun_lahir_ibu'  => $this->request->getVar('tahun_lahir_ibu'),
            'pendidikan_ibu'   => $this->request->getVar('pendidikan_ibu'),
            'pekerjaan_ibu'    => $this->request->getVar('pekerjaan_ibu'),
            'penghasilan_ibu'  => $this->request->getVar('penghasilan_ibu'),
            'created_at'        => date('Y-m-d')
        ];

        $this->dataIbuModel->add($data);

        return redirect()->to('/datawali');
    }

    //--------------------------------------------------------------------

}
