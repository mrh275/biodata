<?php

namespace App\Controllers;

class Dataibu extends BaseController
{
    public function index()
    {
        $data  = [
            'validation'    => \Config\Services::validation()
        ];

        return view('front/form-ibu', $data);
    }

    public function add()
    {
        if (!$this->validate([
            'nama_ibu'    => [
                'rules' => 'required[nama_ibu]',
                'errors'    => [
                    'required'  => 'Nama Lengkap Ibu wajib diisi!'
                ]
            ],
            'nik_ibu'    => [
                'rules' => 'required[nik_ibu]|numeric|min_length[16]|max_length[16]',
                'errors'    => [
                    'required'  => 'Nomor Induk Kependudukan (NIK) Ibu wajib diisi!',
                    'numeric'   => 'Hanya boleh memasukan angka.',
                    'min_length' => 'Hanya boleh memasukan 16 digit angka.',
                    'max_length' => 'Hanya boleh memasukan 16 digit angka.'
                ]
            ],
            'tahun_lahir_ibu'    => [
                'rules' => 'required[tahun_lahir_ibu]|numeric|min_length[4]|max_length[4]',
                'errors'    => [
                    'required'  => 'Tahun Lahir Ibu wajib diisi!',
                    'numeric'   => 'Hanya boleh memasukan angka.',
                    'min_length' => 'Hanya boleh memasukan 4 digit angka.',
                    'max_length' => 'Hanya boleh memasukan 4 digit angka.'
                ]
            ],
            'pendidikan_ibu'    => [
                'rules' => 'required[pendidikan_ibu]',
                'errors'    => [
                    'required'  => 'Pendidikan Terakhir Ibu wajib diisi!'
                ]
            ],
            'pekerjaan_ibu'    => [
                'rules' => 'required[pekerjaan_ibu]',
                'errors'    => [
                    'required'  => 'Pekerjaan Ibu wajib diisi!'
                ]
            ],
            'penghasilan_ibu'    => [
                'rules' => 'required[penghasilan_ibu]',
                'errors'    => [
                    'required'  => 'Penghasilan Bulanan Ibu wajib diisi!'
                ]
            ],
        ])) {
            $validation = \Config\Services::validation();
            return redirect()->to('/dataibu')->withInput()->with('validation', $validation);
        }

        $data = [
            'nis'               => session()->get('nis'),
            'nama_ibu'         => $this->request->getVar('nama_ibu'),
            'nik_ibu'          => $this->request->getVar('nik_ibu'),
            'tahun_lahir_ibu'  => $this->request->getVar('tahun_lahir_ibu'),
            'pendidikan_ibu'   => $this->request->getVar('pendidikan_ibu'),
            'pekerjaan_ibu'    => $this->request->getVar('pekerjaan_ibu'),
            'penghasilan_ibu'  => $this->request->getVar('penghasilan_ibu'),
            'created_at'        => date('Y-m-d')
        ];

        $this->dataIbuModel->add($data);

        $alm = session()->get('alm');
        if ($alm == 13) {
            return redirect()->to('/datawali');
        } else {
            return redirect()->to('/dataperiodik');
        }
    }

    //--------------------------------------------------------------------

}
