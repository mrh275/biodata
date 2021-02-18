<?php

namespace App\Controllers;

class Datawali extends BaseController
{
    public function index()
    {
        if (session()->get('nis') == FALSE) {
            return redirect()->to('/biodata');
        }

        $data  = [
            'validation'    => \Config\Services::validation(),
            'pendidikan'    => $this->dataIbuModel->getPendidikan(),
            'pekerjaan'     => $this->dataIbuModel->getPekerjaan(),
            'penghasilan'   => $this->dataIbuModel->getPenghasilan()
        ];

        return view('front/form-wali', $data);
    }

    public function add()
    {
        if (!$this->validate([
            'nama_wali'    => [
                'rules' => 'required[nama_wali]',
                'errors'    => [
                    'required'  => 'Nama Lengkap Wali wajib diisi!'
                ]
            ],
            'nik_wali'    => [
                'rules' => 'required[nik_wali]|numeric|min_length[16]|max_length[16]',
                'errors'    => [
                    'required'  => 'Nomor Induk Kependudukan (NIK) Wali wajib diisi!',
                    'numeric'   => 'Hanya boleh memasukan angka.',
                    'min_length' => 'Hanya boleh memasukan 16 digit angka.',
                    'max_length' => 'Hanya boleh memasukan 16 digit angka.'
                ]
            ],
            'tahun_lahir_wali'    => [
                'rules' => 'required[tahun_lahir_wali]|numeric|min_length[4]|max_length[4]',
                'errors'    => [
                    'required'  => 'Tahun Lahir Wali wajib diisi!',
                    'numeric'   => 'Hanya boleh memasukan angka.',
                    'min_length' => 'Hanya boleh memasukan 4 digit angka.',
                    'max_length' => 'Hanya boleh memasukan 4 digit angka.'
                ]
            ],
            'pendidikan_wali'    => [
                'rules' => 'required[pendidikan_wali]',
                'errors'    => [
                    'required'  => 'Pendidikan Terakhir Wali wajib diisi!'
                ]
            ],
            'pekerjaan_wali'    => [
                'rules' => 'required[pekerjaan_wali]',
                'errors'    => [
                    'required'  => 'Pekerjaan Wali wajib diisi!'
                ]
            ],
            'penghasilan_wali'    => [
                'rules' => 'required[penghasilan_wali]',
                'errors'    => [
                    'required'  => 'Penghasilan Bulanan Wali wajib diisi!'
                ]
            ],
        ])) {
            $validation = \Config\Services::validation();
            return redirect()->to('/datawali')->withInput()->with('validation', $validation);
        }

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
