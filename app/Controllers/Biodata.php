<?php

namespace App\Controllers;

class Biodata extends BaseController
{
    public function index()
    {
        $data  = [
            'validation'    => \Config\Services::validation()
        ];

        return view('front/home', $data);
    }

    public function add()
    {
        if (!$this->validate([
            'nama'    => [
                'rules' => 'required[nama]',
                'errors'    => [
                    'required'  => 'Nama Lengkap wajib diisi!'
                ]
            ],
            'jk'    => [
                'rules' => 'required[jk]',
                'errors'    => [
                    'required'  => 'Jenis kelamin wajib diisi!'
                ]
            ],
            'kelas'    => [
                'rules' => 'required[kelas]',
                'errors'    => [
                    'required'  => 'Kelas wajib diisi!'
                ]
            ],
            'nis'    => [
                'rules' => 'required[nis]|numeric|min_length[9]|max_length[9]',
                'errors'    => [
                    'required'  => 'Nomor Induk Sekolah (NIS) wajib diisi!',
                    'numeric'   => 'Hanya boleh memasukan angka.',
                    'min_length' => 'Jumlah angka boleh yang dimasukan hanya 9 karakter.',
                    'max_length' => 'Jumlah angka boleh yang dimasukan hanya 9 karakter.'
                ]
            ],
            'nisn'    => [
                'rules' => 'required[nisn]|numeric|min_length[10]|max_length[10]',
                'errors'    => [
                    'required'  => 'Nomor Induk Siswa Nasional (NISN) wajib diisi!',
                    'numeric'   => 'Hanya boleh memasukan angka.',
                    'min_length' => 'Jumlah angka boleh yang dimasukan hanya 10 karakter.',
                    'max_length' => 'Jumlah angka boleh yang dimasukan hanya 10 karakter.'
                ]
            ],
            'nik'    => [
                'rules' => 'required[nik]|numeric|min_length[16]|max_length[16]',
                'errors'    => [
                    'required'  => 'Nomor Induk Kependudukan (NIK) wajib diisi!',
                    'numeric'   => 'Hanya boleh memasukan angka.',
                    'min_length' => 'Jumlah angka boleh yang dimasukan hanya 16 karakter.',
                    'max_length' => 'Jumlah angka boleh yang dimasukan hanya 16 karakter.'
                ]
            ],
            'kk'    => [
                'rules' => 'required[kk]|numeric|min_length[16]|max_length[16]',
                'errors'    => [
                    'required'  => 'Nomor Kartu Keluarga wajib diisi!',
                    'numeric'   => 'Hanya boleh memasukan angka.',
                    'min_length' => 'Jumlah angka boleh yang dimasukan hanya 16 karakter.',
                    'max_length' => 'Jumlah angka boleh yang dimasukan hanya 16 karakter.'
                ]
            ],
            'anak_ke_berapa'    => [
                'rules' => 'required[anak_ke_berapa]|numeric|max_length[1]',
                'errors'    => [
                    'required'  => 'Silahkan isi terlebih dahulu anak keberapa anda!?',
                    'numeric'   => 'Harap hanya masukan angka saja.',
                    'max_length' => 'Cukup masukan satu digit angka saja.'
                ]
            ],
            'tempatlahir'    => [
                'rules' => 'required[tempatlahir]',
                'errors'    => [
                    'required'  => 'Tempat lahir wajib diisi!',
                ]
            ],
            'tgl_lahir'    => [
                'rules' => 'required[tgl_lahir]|valid_date',
                'errors'    => [
                    'required'  => 'Tanggal lahir wajib diisi!',
                ]
            ],
            'agama'    => [
                'rules' => 'required[agama]',
                'errors'    => [
                    'required'  => 'Agama wajib diisi!',
                ]
            ],
            'alamat'    => [
                'rules' => 'required[alamat]',
                'errors'    => [
                    'required'  => 'Alamat wajib diisi!',
                ]
            ],
            'rt'    => [
                'rules' => 'required[rt]|numeric|max_length[3]',
                'errors'    => [
                    'required'  => 'Nomor RT wajib diisi!',
                    'numeric'   => 'Hanya bisa memasukan angka saja.',
                    'max_length' => 'Maksimal angka yang dimasukan hanya 3 digit.'
                ]
            ],
            'rw'    => [
                'rules' => 'required[rw]|numeric|max_length[3]',
                'errors'    => [
                    'required'  => 'Nomor RW wajib diisi!',
                    'numeric'   => 'Hanya bisa memasukan angka saja.',
                    'max_length' => 'Maksimal angka yang dimasukan hanya 3 digit.'
                ]
            ],
            'dusun'    => [
                'rules' => 'required[dusun]',
                'errors'    => [
                    'required'  => 'Nama Dusun/Kampung wajib diisi!',
                ]
            ],
            'desa'    => [
                'rules' => 'required[desa]',
                'errors'    => [
                    'required'  => 'Desa/Kelurahan wajib diisi!',
                ]
            ],
            'kecamatan'    => [
                'rules' => 'required[kecamatan]',
                'errors'    => [
                    'required'  => 'Kecamatan wajib diisi!',
                ]
            ],
            'pos'    => [
                'rules' => 'required[pos]|numeric|max_length[5]',
                'errors'    => [
                    'required'  => 'Kode POS wajib diisi!',
                    'numeric'   => 'Hanya bisa memasukan angka saja.',
                    'max_length' => 'Maksimal angka yang dimasukan hanya 5 digit.'
                ]
            ],
            'tinggal'    => [
                'rules' => 'required[tinggal]',
                'errors'    => [
                    'required'  => 'Tempat tinggal wajib diisi!',
                ]
            ],
            'transportasi'    => [
                'rules' => 'required[transportasi]',
                'errors'    => [
                    'required'  => 'Mode Transportasi wajib diisi!',
                ]
            ],
        ])) {
            $validation = \Config\Services::validation();
            return redirect()->to('/biodata')->withInput()->with('validation', $validation);
        }

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
