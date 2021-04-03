<?php

namespace App\Controllers;

use Irsyadulibad\DataTables\DataTables;

class Biodata extends BaseController
{
    public function index()
    {
        $data  = [
            'title'             => 'Form Biodata | PPDB SMA Negeri 1 Rawamerta',
        ];

        return view('front/home', $data);
    }

    public function form()
    {
        if ($this->request->isAJAX()) {
            $data = [
                'validation'        => \Config\Services::validation(),
                'jenis_kelamin'     => $this->biodataModel->getJK(),
                'kelas'             => $this->biodataModel->getKelas(),
                'agama'             => $this->biodataModel->getAgama(),
                'tempat_tinggal'    => $this->biodataModel->getTinggal(),
                'transportasi'      => $this->biodataModel->getTransportasi(),
            ];

            $msg = [
                'data' => view('front/biodata', $data),
                'isi'   => 'Hallo'
            ];

            echo json_encode($msg);
        } else {
            exit('Halaman tidak ditemukan!');
        }
    }

    public function add()
    {

        if ($this->request->isAJAX()) {
            $validation = \Config\Services::validation();
            if (!$this->validate([
                'nama'    => [
                    'rules' => 'required[nama]',
                    'errors'    => [
                        'required'  => 'Nama Lengkap wajib diisi!'
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
            ])) {


                $msg = [
                    'error' => [
                        'nama'          => $validation->getError('nama'),
                        'nisn'          => $validation->getError('nisn'),
                        'nik'           => $validation->getError('nik'),
                        'noKK'          => $validation->getError('kk'),
                        'anakKeBerapa'  => $validation->getError('anak_ke_berapa'),
                        'tempatlahir'   => $validation->getError('tempatlahir'),
                        'tgl_lahir'     => $validation->getError('tgl_lahir'),
                        'akte'          => $validation->getError('no_akte'),
                        'alamat'        => $validation->getError('alamat'),
                        'rt'            => $validation->getError('rt'),
                        'rw'            => $validation->getError('rw'),
                        'dusun'         => $validation->getError('dusun'),
                        'desa'          => $validation->getError('desa'),
                        'kecamatan'     => $validation->getError('kecamatan'),
                        'pos'           => $validation->getError('pos'),
                    ],
                ];

                echo json_encode($msg);
            } else {
                $data = [
                    'no_daftar'          => $this->request->getVar('no_regis'),
                    'nama'              => $this->request->getVar('nama'),
                    'jenis_kelamin'     => $this->request->getVar('jk'),
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
                    'created_at'        => date('Y-m-d H:i:s')
                ];

                $sesi = [
                    'no_daftar'   => $this->request->getVar('no_regis'),
                ];

                session()->set($sesi);

                $this->biodataModel->add($data);

                $msg = [
                    'sukses'    => 'Data berhasil ditambahkan'
                ];

                echo json_encode($msg);
            }
        }
    }

    public function view()
    {
        $submenu = 'data-diri';

        $data = [
            'menu'          => 'data-siswa',
            'listMenu'      => $this->menuModel->getMenu(),
            'submenuSlug'   => $submenu,
            'submenuName'   => $this->menuModel->getSubmenuBy($submenu),
            'title'         => 'Data Diri Siswa | Mini Dapodik',
        ];

        return view('admin/biodata', $data);
    }

    public function getAllSiswa()
    {
        if ($this->request->isAJAX()) {
            $data = [
                'datasiswa'     => $this->menuModel->findAll(),
            ];

            $msg = [
                'data'  => view('datatable/datasiswa', $data),
            ];
            echo json_encode($msg);
        } else {
            exit('Data tidak ditemukan. Silahkan hubungi admin.');
        }
    }

    public function tambahsiswa()
    {
        if ($this->request->isAJAX()) {
            $data  = [
                'validation'        => \Config\Services::validation(),
                'jenis_kelamin'     => $this->biodataModel->getJK(),
                'kelas'             => $this->biodataModel->getKelas(),
                'agama'             => $this->biodataModel->getAgama(),
                'tempat_tinggal'    => $this->biodataModel->getTinggal(),
                'transportasi'      => $this->biodataModel->getTransportasi(),
            ];

            $msg = [
                'data'  => view('modal/tambahsiswamodal', $data),
            ];
            echo json_encode($msg);
        } else {
            exit('Data tidak ditemukan. Silahkan hubungi admin.');
        }
    }

    public function editsiswa()
    {
        if ($this->request->isAJAX()) {
            $nis = $this->request->getVar('nis');
            $data  = [
                'validation'        => \Config\Services::validation(),
                'jenis_kelamin'     => $this->biodataModel->getJK(),
                'kelas'             => $this->biodataModel->getKelas(),
                'agama'             => $this->biodataModel->getAgama(),
                'tempat_tinggal'    => $this->biodataModel->getTinggal(),
                'transportasi'      => $this->biodataModel->getTransportasi(),
                'datasiswa'         => $this->biodataModel->getSiswaByNis($nis),
            ];

            $msg = [
                'data'  => view('modal/editsiswamodal', $data),
            ];
            echo json_encode($msg);
        } else {
            exit('Halaman tidak ditemukan. Silahkan hubungi admin.');
        }
    }

    public function simpanSiswa()
    {
        if ($this->request->isAJAX()) {
            //Load validation services
            $validation = \Config\Services::validation();

            //Validation form
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
                //Load error dari validation untuk json
                $msg = [
                    'error' => [
                        'nama'              => $validation->getError('nama'),
                        'jk'                => $validation->getError('jk'),
                        'kelas'             => $validation->getError('kelas'),
                        'nis'               => $validation->getError('nis'),
                        'nisn'              => $validation->getError('nisn'),
                        'nik'               => $validation->getError('nik'),
                        'kk'                => $validation->getError('kk'),
                        'anak_ke_berapa'    => $validation->getError('anak_ke_berapa'),
                        'tempatlahir'       => $validation->getError('tempatlahir'),
                        'tgl_lahir'         => $validation->getError('tgl_lahir'),
                        'no_akte'           => $validation->getError('no_akte'),
                        'agama'             => $validation->getError('agama'),
                        'alamat'            => $validation->getError('alamat'),
                        'rt'                => $validation->getError('rt'),
                        'rw'                => $validation->getError('rw'),
                        'dusun'             => $validation->getError('dusun'),
                        'desa'              => $validation->getError('desa'),
                        'kecamatan'         => $validation->getError('kecamatan'),
                        'pos'               => $validation->getError('pos'),
                        'tinggal'           => $validation->getError('tinggal'),
                        'transportasi'      => $validation->getError('transportasi'),
                    ],
                ];
            } else {
                //Ambil data dari form
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

                //Kirim data ke model
                $this->biodataModel->add($data);

                //Pesan berhasil memasukan data
                $msg = [
                    'sukses' => "Data Siswa Baru sudah ditambakan.",
                ];
            }

            //Encode/convert array ke json
            echo json_encode($msg);
        } else {
            //Escape error direct access
            exit('Data tidak ditemukan. Silahkan hubungi admin.');
        }
    }

    public function updateSiswa()
    {
        if ($this->request->isAJAX()) {

            //Ambil data dari form
            $data = [
                'nama'              => $this->request->getVar('nama'),
                'jenis_kelamin'     => $this->request->getVar('jk'),
                'kelas'             => $this->request->getVar('kelas'),
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

            $nis = $this->request->getVar('nis');

            //Kirim data ke model
            $this->biodataModel->updateDataSiswa($nis, $data);

            //Pesan berhasil memasukan data
            $msg = [
                'sukses' => "Data Siswa sudah diubah.",
            ];


            //Encode/convert array ke json
            echo json_encode($msg);
        } else {
            //Escape error direct access
            exit('Halaman tidak ditemukan. Silahkan hubungi admin.');
        }
    }

    public function hapusSiswa()
    {
        if ($this->request->isAJAX()) {
            $nis = $this->request->getVar('nis');

            $this->biodataModel->hapusSiswaByNis($nis);

            $msg = [
                'sukses' => "Data Siswa telah berhasil dihapus.",
            ];

            //Encode/convert array ke json
            echo json_encode($msg);
        }
    }

    //--------------------------------------------------------------------

}
