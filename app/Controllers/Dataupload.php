<?php

namespace App\Controllers;

class Dataupload extends BaseController
{
    public function index()
    {
        $data  = [
            'validation'    => \Config\Services::validation()
        ];

        return view('front/form-upload', $data);
    }

    public function add()
    {
        if (!$this->validate([
            'file_ijazah'    => [
                'rules' => 'uploaded[file_ijazah]|max_size[file_ijazah,2048]|is_image[file_ijazah]|mime_in[file_ijazah,image/jpg,image/jpeg,image/png]',
                'errors'    => [
                    'uploaded'  => 'Scan ijazah wajib di unggah!',
                    'max_size'  => 'Ukuran gambar terlalu besar.',
                    'is_image'  => 'Yang anda pilih bukan gambar.',
                    'mime_in'  => 'Yang anda pilih bukan gambar.'
                ]
            ],
            'file_skhun'    => [
                'rules' => 'uploaded[file_skhun]|max_size[file_skhun,2048]|is_image[file_skhun]|mime_in[file_skhun,image/jpg,image/jpeg,image/png]',
                'errors'    => [
                    'uploaded'  => 'Scan SKHUN wajib di unggah!',
                    'max_size'  => 'Ukuran gambar terlalu besar.',
                    'is_image'  => 'Yang anda pilih bukan gambar.',
                    'mime_in'  => 'Yang anda pilih bukan gambar.'
                ]
            ],
            'file_kk'    => [
                'rules' => 'uploaded[file_kk]|max_size[file_kk,2048]|is_image[file_kk]|mime_in[file_kk,image/jpg,image/jpeg,image/png]',
                'errors'    => [
                    'uploaded'  => 'Scan Kartu Keluarga wajib di unggah!',
                    'max_size'  => 'Ukuran gambar terlalu besar.',
                    'is_image'  => 'Yang anda pilih bukan gambar.',
                    'mime_in'  => 'Yang anda pilih bukan gambar.'
                ]
            ],
            'file_akte'    => [
                'rules' => 'max_size[file_akte,2048]|is_image[file_akte]|mime_in[file_akte,image/jpg,image/jpeg,image/png]',
                'errors'    => [
                    'max_size'  => 'Ukuran gambar terlalu besar.',
                    'is_image'  => 'Yang anda pilih bukan gambar.',
                    'mime_in'  => 'Yang anda pilih bukan gambar.'
                ]
            ],
        ])) {
            // $validation = \Config\Services::validation();
            // return redirect()->to('/dataupload')->withInput()->with('validation', $validation);
            return redirect()->to('/dataupload')->withInput();
        }

        //Ambil gambar upload
        $file_ijazah    = $this->request->getFile('file_ijazah');
        $file_skhun     = $this->request->getFile('file_skhun');
        $file_kk        = $this->request->getFile('file_kk');
        $file_akte      = $this->request->getFile('file_akte');

        //Ambil ekstensi file
        $ext_ijazah     = $file_ijazah->getExtension();
        $ext_skhun      = $file_skhun->getExtension();
        $ext_kk         = $file_kk->getExtension();
        $ext_akte       = $file_akte->getExtension();

        //Pengecekan jika akte tidak di upload
        if ($file_akte->getError() == 4) {
            $namaBaru_akte      = 'default.jpg';
        } else {
            $namaBaru_akte      = '121310473' . '_' . 'akte.' . $ext_akte;
            $file_akte->move('asset/img/akte', $namaBaru_akte);
        }

        //Rubah nama file
        $namaBaru_ijazah    = '121310473' . '_' . 'ijazah.' . $ext_ijazah;
        $namaBaru_skhun     = '121310473' . '_' . 'skhun.' . $ext_skhun;
        $namaBaru_kk        = '121310473' . '_' . 'kk.' . $ext_kk;

        //Pindahkan file ke folder masing2 file
        $file_ijazah->move('asset/img/ijazah', $namaBaru_ijazah);
        $file_skhun->move('asset/img/skhun', $namaBaru_skhun);
        $file_kk->move('asset/img/kk', $namaBaru_kk);


        $data = [
            'nis'           => '',
            'file_ijazah'   => $namaBaru_ijazah,
            'file_skhun'    => $namaBaru_skhun,
            'file_kk'       => $namaBaru_kk,
            'file_akte'     => $namaBaru_akte,
            'created_at'    => date('Y-m-d')
        ];

        $this->dataUploadModel->add($data);

        return redirect()->to('/programkesejahteraan');
    }

    //--------------------------------------------------------------------

}
