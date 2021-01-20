<?php

namespace App\Controllers;

class Dataperiodik extends BaseController
{
    public function index()
    {
        return view('front/form-periodik');
    }

    public function add()
    {

        $data = [
            'asal_sekolah'       => $this->request->getVar('asal_sekolah'),
            'nomor_peserta_un'   => $this->request->getVar('nopes_un'),
            'nomor_seri_ijazah'  => $this->request->getVar('no_ijazah'),
            'nomor_seri_skhun'   => $this->request->getVar('no_skhun'),
            'tinggi_badan'       => $this->request->getVar('tinggi_badan'),
            'berat_badan'        => $this->request->getVar('berat_badan'),
            'hobi'               => $this->request->getVar('hobi'),
            'cita_cita'          => $this->request->getVar('cita_cita'),
            'jarak_rumah'        => $this->request->getVar('jarak_rumah'),
            'waktu_tempuh'       => $this->request->getVar('waktu_tempuh'),
            'created_at'         => date('Y-m-d')
        ];

        $this->dataPeriodikModel->add($data);

        return redirect()->to('/dataupload');
    }

    //--------------------------------------------------------------------

}
