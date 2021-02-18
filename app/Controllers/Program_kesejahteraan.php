<?php

namespace App\Controllers;

class Program_kesejahteraan extends BaseController
{
    public function index()
    {
        if (session()->get('nis') == FALSE) {
            return redirect()->to('/biodata');
        }

        $data  = [
            'validation'    => \Config\Services::validation()
        ];

        return view('front/program-kesejahteraan', $data);
    }

    public function add()
    {
        if (!$this->validate([
            'file_kip'    => [
                'rules' => 'max_size[file_kip,2048]|is_image[file_kip]|mime_in[file_kip,image/jpg,image/jpeg,image/png]',
                'errors'    => [
                    'uploaded'  => 'Scan KIP wajib di unggah!',
                    'max_size'  => 'Ukuran gambar terlalu besar.',
                    'is_image'  => 'Yang anda pilih bukan gambar.',
                    'mime_in'  => 'Yang anda pilih bukan gambar.'
                ]
            ],
            'file_kis'    => [
                'rules' => 'max_size[file_kis,2048]|is_image[file_kis]|mime_in[file_kis,image/jpg,image/jpeg,image/png]',
                'errors'    => [
                    'uploaded'  => 'Scan KIS wajib di unggah!',
                    'max_size'  => 'Ukuran gambar terlalu besar.',
                    'is_image'  => 'Yang anda pilih bukan gambar.',
                    'mime_in'  => 'Yang anda pilih bukan gambar.'
                ]
            ],
            'file_pkh'    => [
                'rules' => 'max_size[file_pkh,2048]|is_image[file_pkh]|mime_in[file_pkh,image/jpg,image/jpeg,image/png]',
                'errors'    => [
                    'uploaded'  => 'Scan Kartu PKS/KKS/KPS/SKTM wajib di unggah!',
                    'max_size'  => 'Ukuran gambar terlalu besar.',
                    'is_image'  => 'Yang anda pilih bukan gambar.',
                    'mime_in'  => 'Yang anda pilih bukan gambar.'
                ]
            ],
        ])) {
            // $validation = \Config\Services::validation();
            // return redirect()->to('/dataupload')->withInput()->with('validation', $validation);
            return redirect()->to('/program_kesejahteraan')->withInput();
        }

        $nis = session()->get('nis');
        $kelas  = session()->get('kelas');

        //Ambil gambar upload
        $file_kip    = $this->request->getFile('file_kip');
        $file_kis     = $this->request->getFile('file_kis');
        $file_pkh        = $this->request->getFile('file_pkh');

        //Ambil ekstensi file
        $ext_kip     = $file_kip->getExtension();
        $ext_kis      = $file_kis->getExtension();
        $ext_pkh         = $file_pkh->getExtension();

        //Pengecekan jika kip tidak di upload
        if ($file_kip->getError() == 4) {
            $namaBaru_kip      = 'default.jpg';
        } else {
            //Rubah nama file
            $namaBaru_kip    = $nis . '_' . 'kip.' . $ext_kip;
            $file_kip->move('asset/img/kip/' . $kelas, $namaBaru_kip);
        }

        //Pengecekan jika kis tidak di upload
        if ($file_kis->getError() == 4) {
            $namaBaru_kis      = 'default.jpg';
        } else {
            //Rubah nama file
            $namaBaru_kis    = $nis . '_' . 'kis.' . $ext_kis;
            $file_kis->move('asset/img/kis/' . $kelas, $namaBaru_kis);
        }

        //Pengecekan jika kis tidak di upload
        if ($file_pkh->getError() == 4) {
            $namaBaru_pkh      = 'default.jpg';
        } else {
            //Rubah nama file
            $namaBaru_pkh        = $nis . '_' . 'pkh.' . $ext_pkh;
            $file_pkh->move('asset/img/pkh/' . $kelas, $namaBaru_pkh);
        }

        $data = [
            'nis'           => $nis,
            'no_kip'        => $this->request->getVar('kip'),
            'file_kip'      => $namaBaru_kip,
            'no_kis'        => $this->request->getVar('kis'),
            'file_kis'      => $namaBaru_kis,
            'no_pkh'        => $this->request->getVar('pkh'),
            'file_pkh'      => $namaBaru_pkh,
            'created_at'    => date('Y-m-d')
        ];

        $this->dataProgramKesejahteraanModel->add($data);

        return redirect()->to('/finish');
    }

    //--------------------------------------------------------------------

}
