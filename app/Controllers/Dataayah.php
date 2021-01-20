<?php

namespace App\Controllers;

class Dataayah extends BaseController
{
    public function index()
    {
        return view('front/form-ayah');
    }

    public function add()
    {

        $data = [
            'nama_ayah'         => $this->request->getVar('nama_ayah'),
            'nik_ayah'          => $this->request->getVar('nik_ayah'),
            'tahun_lahir_ayah'  => $this->request->getVar('tahun_lahir_ayah'),
            'pendidikan_ayah'   => $this->request->getVar('pendidikan_ayah'),
            'pekerjaan_ayah'    => $this->request->getVar('pekerjaan_ayah'),
            'penghasilan_ayah'  => $this->request->getVar('penghasilan_ayah'),
            'created_at'        => date('Y-m-d')
        ];

        $this->dataAyahModel->add($data);

        return redirect()->to('/dataibu');
    }

    //--------------------------------------------------------------------

}
