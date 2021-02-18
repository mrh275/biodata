<?php

namespace App\Controllers;

class Dataperiodik extends BaseController
{
    public function index()
    {
        if (session()->get('alm') == FALSE) {
            return redirect()->to('/dataayah');
        }

        if (session()->get('nis') == FALSE) {
            return redirect()->to('/biodata');
        }

        $data  = [
            'validation'    => \Config\Services::validation()
        ];

        return view('front/form-periodik', $data);
    }

    public function add()
    {
        if (!$this->validate([
            'asal_sekolah'    => [
                'rules' => 'required[asal_sekolah]',
                'errors'    => [
                    'required'  => 'Nama Sekolah Asal (SMP/MTs) wajib diisi!'
                ]
            ],
            'nopes_un'    => [
                'rules' => 'required[nopes_un]',
                'errors'    => [
                    'required'  => 'Nomor Peserta UN SMP/MTs wajib diisi!'
                ]
            ],
            'no_ijazah'    => [
                'rules' => 'required[no_ijazah]',
                'errors'    => [
                    'required'  => 'Nomor Seri Ijazah SMP/MTs wajib diisi!'
                ]
            ],
            'no_skhun'    => [
                'rules' => 'required[no_skhun]',
                'errors'    => [
                    'required'  => 'Nomor Seri SKHUN SMP/MTs wajib diisi!'
                ]
            ],
            'tinggi_badan'    => [
                'rules' => 'required[tinggi_badan]|numeric|max_length[3]',
                'errors'    => [
                    'required'  => 'Tinggi badan wajib diisi!',
                    'numeric'   => 'Hanya bisa memasukan angka saja.',
                    'max_length' => 'Maksimal angka yang dapat dimasukan hanya 3 digit.'
                ]
            ],
            'berat_badan'    => [
                'rules' => 'required[berat_badan]|numeric|max_length[3]',
                'errors'    => [
                    'required'  => 'Berat badan wajib diisi!',
                    'numeric'   => 'Hanya bisa memasukan angka saja.',
                    'max_length' => 'Maksimal angka yang dapat dimasukan hanya 3 digit.'
                ]
            ],
            'hobi'    => [
                'rules' => 'required[hobi]',
                'errors'    => [
                    'required'  => 'Hobi wajib diisi!'
                ]
            ],
            'cita_cita'    => [
                'rules' => 'required[cita_cita]',
                'errors'    => [
                    'required'  => 'Cita - cita wajib diisi!'
                ]
            ],
            'jarak_rumah'    => [
                'rules' => 'required[jarak_rumah]|numeric|max_length[4]',
                'errors'    => [
                    'required'  => 'Berat badan wajib diisi!',
                    'numeric'   => 'Hanya bisa memasukan angka saja.',
                    'max_length' => 'Maksimal angka yang dapat dimasukan hanya 4 digit.'
                ]
            ],
            'waktu_tempuh'    => [
                'rules' => 'required[waktu_tempuh]|numeric|max_length[4]',
                'errors'    => [
                    'required'  => 'Berat badan wajib diisi!',
                    'numeric'   => 'Hanya bisa memasukan angka saja.',
                    'max_length' => 'Maksimal angka yang dapat dimasukan hanya 4 digit.'
                ]
            ],
        ])) {
            $validation = \Config\Services::validation();
            return redirect()->to('/dataperiodik')->withInput()->with('validation', $validation);
        }

        $data = [
            'nis'               => session()->get('nis'),
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
