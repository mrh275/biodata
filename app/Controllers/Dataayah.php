<?php

namespace App\Controllers;

class Dataayah extends BaseController
{
    public function index()
    {
        $data  = [
            'validation'    => \Config\Services::validation(),
        ];

        return view('front/form-ayah', $data);
    }

    public function add()
    {
        if (!$this->validate([
            'nama_ayah'    => [
                'rules' => 'required[nama_ayah]',
                'errors'    => [
                    'required'  => 'Nama Lengkap Ayah wajib diisi!'
                ]
            ],
            'nik_ayah'    => [
                'rules' => 'required[nik_ayah]|numeric|min_length[16]|max_length[16]',
                'errors'    => [
                    'required'  => 'Nomor Induk Kependudukan (NIK) Ayah wajib diisi!',
                    'numeric'   => 'Hanya boleh memasukan angka.',
                    'min_length' => 'Hanya boleh memasukan 16 digit angka.',
                    'max_length' => 'Hanya boleh memasukan 16 digit angka.'
                ]
            ],
            'tahun_lahir_ayah'    => [
                'rules' => 'required[tahun_lahir_ayah]|numeric|min_length[4]|max_length[4]',
                'errors'    => [
                    'required'  => 'Tahun Lahir Ayah wajib diisi!',
                    'numeric'   => 'Hanya boleh memasukan angka.',
                    'min_length' => 'Hanya boleh memasukan 4 digit angka.',
                    'max_length' => 'Hanya boleh memasukan 4 digit angka.'
                ]
            ],
            'pendidikan_ayah'    => [
                'rules' => 'required[pendidikan_ayah]',
                'errors'    => [
                    'required'  => 'Pendidikan Terakhir Ayah wajib diisi!'
                ]
            ],
            'pekerjaan_ayah'    => [
                'rules' => 'required[pekerjaan_ayah]',
                'errors'    => [
                    'required'  => 'Pekerjaan Ayah wajib diisi!'
                ]
            ],
            'penghasilan_ayah'    => [
                'rules' => 'required[penghasilan_ayah]',
                'errors'    => [
                    'required'  => 'Penghasilan Bulanan Ayah wajib diisi!'
                ]
            ],
        ])) {
            $validation = \Config\Services::validation();
            return redirect()->to('/dataayah')->withInput()->with('validation', $validation);
        }

        $data = [
            'nis'               => session()->get('nis'),
            'nama_ayah'         => $this->request->getVar('nama_ayah'),
            'nik_ayah'          => $this->request->getVar('nik_ayah'),
            'tahun_lahir_ayah'  => $this->request->getVar('tahun_lahir_ayah'),
            'pendidikan_ayah'   => $this->request->getVar('pendidikan_ayah'),
            'pekerjaan_ayah'    => $this->request->getVar('pekerjaan_ayah'),
            'penghasilan_ayah'  => $this->request->getVar('penghasilan_ayah'),
            'created_at'        => date('Y-m-d'),
        ];

        if ($data['pekerjaan_ayah'] == 13) {
            $alm = $data['pekerjaan_ayah'];
            session()->set('alm', $alm);
        }


        $this->dataAyahModel->add($data);

        return redirect()->to('/dataibu');
    }

    //--------------------------------------------------------------------

}
