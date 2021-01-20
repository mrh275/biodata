<?php

namespace App\Controllers;

class Biodata extends BaseController
{
    public function index()
    {
        return view('front/home');
    }

    public function add()
    {
        $data = [
            'nama'              => $this->request->getVar('nama'),
            'jenis_kelamin'     => $this->request->getVar('jk'),
            'kelas'             => $this->request->getVar('kelas'),
            'nis'               => $this->request->getVar('nis'),
            'nisn'              => $this->request->getVar('nisn'),
            'nik'               => $this->request->getVar('nik'),
            'no_kk'             => $this->request->getVar('kk'),
            'anak_ke_berapa'    => $this->request->getVar('anak_ke_berapa'),
            'tempat_lahir'      => $this->request->getVar('tempatlahir'),
            'tanggal_lahir'     => $this->request->getVar('tgl_lahir'),
            'no_akte'           => $this->request->getVar('no_akte'),
            'agama'             => $this->request->getVar('agama'),
            'alamat'            => $this->request->getVar('alamat'),
            'rt'                => $this->request->getVar('rt'),
            'rw'                => $this->request->getVar('rw'),
            'dusun'             => $this->request->getVar('dusun'),
            'desa'              => $this->request->getVar('desa'),
            'kecamatan'         => $this->request->getVar('kecamatan'),
            'pos'               => $this->request->getVar('pos'),
            'tempat_tinggal'    => $this->request->getVar('tinggal'),
            'transportasi'      => $this->request->getVar('transportasi'),
            'created_at'        => date('Y-m-d')
        ];

        $this->biodataModel->add($data);

        return redirect()->to('/dataayah');
    }

    //--------------------------------------------------------------------

}
