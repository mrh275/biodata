<?php

namespace App\Controllers;

use Irsyadulibad\DataTables\DataTables;

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

    public function view()
    {
        $submenu = 'data-periodik';

        $data = [
            'menu'          => 'data-siswa',
            'listMenu'      => $this->menuModel->getMenu(),
            'submenuSlug'   => $submenu,
            'submenuName'   => $this->menuModel->getSubmenuBy($submenu),
            'title'         => 'Data Periodik Siswa | Mini Dapodik',
        ];

        return view('admin/data-periodik', $data);
    }

    public function getPeriodikSiswa()
    {
        if ($this->request->isAJAX()) {
            $data = [
                'dataperiodik'     => $this->dataPeriodikModel->getPeriodikSiswa(),
            ];

            $msg = [
                'data'  => view('datatable/periodiksiswa', $data),
            ];
            echo json_encode($msg);
        } else {
            exit('Data tidak ditemukan. Silahkan hubungi admin.');
        }
    }

    // public function tambahPeriodik()
    // {
    //     if ($this->request->isAJAX()) {
    //         $data  = [
    //             'validation'        => \Config\Services::validation(),
    //             'dataperiodik'      => $this->dataPeriodikModel->getPeriodikByNis($nis),
    //             'datasiswa'         => $this->dataPeriodikModel->getSiswaByNis($nis),
    //             'kelas'             => $this->dataPeriodikModel->getKelas(),
    //         ];

    //         $msg = [
    //             'data'  => view('modal/tambahsiswamodal', $data),
    //         ];
    //         echo json_encode($msg);
    //     } else {
    //         exit('Data tidak ditemukan. Silahkan hubungi admin.');
    //     }
    // }

    public function editperiodik()
    {
        if ($this->request->isAJAX()) {
            $nis = $this->request->getVar('nis');
            $data  = [
                'validation'        => \Config\Services::validation(),
                'dataperiodik'      => $this->dataPeriodikModel->getPeriodikByNis($nis),
                'datasiswa'         => $this->dataPeriodikModel->getSiswaByNis($nis),
                'kelas'             => $this->dataPeriodikModel->getKelas(),
            ];

            $msg = [
                'data'  => view('modal/editperiodikmodal', $data),
            ];
            echo json_encode($msg);
        } else {
            exit('Halaman tidak ditemukan. Silahkan hubungi admin.');
        }
    }

    public function updatePeriodik()
    {
        if ($this->request->isAJAX()) {

            //Ambil data dari form
            $data = [
                'nis'               => $this->request->getVar('nis'),
                'asal_sekolah'      => $this->request->getVar('asal_sekolah'),
                'nomor_peserta_un'  => $this->request->getVar('nomor_peserta_un'),
                'nomor_seri_ijazah' => $this->request->getVar('nomor_seri_ijazah'),
                'nomor_seri_skhun'  => $this->request->getVar('nomor_seri_skhun'),
                'tinggi_badan'      => $this->request->getVar('tinggi_badan'),
                'berat_badan'       => $this->request->getVar('berat_badan'),
                'hobi'              => $this->request->getVar('hobi'),
                'cita_cita'         => $this->request->getVar('cita_cita'),
                'jarak_rumah'       => $this->request->getVar('jarak_rumah'),
                'waktu_tempuh'      => $this->request->getVar('waktu_tempuh'),
                'updated_at'        => date('Y-m-d')
            ];

            $nis = $this->request->getVar('nis');

            //Kirim data ke model
            $this->dataPeriodikModel->updateDataperiodik($nis, $data);

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

    public function hapusPeriodik()
    {
        if ($this->request->isAJAX()) {
            $nis = $this->request->getVar('nis');

            $this->dataPeriodikModel->hapusPeriodikByNis($nis);

            $msg = [
                'sukses' => "Data Siswa telah berhasil dihapus.",
            ];

            //Encode/convert array ke json
            echo json_encode($msg);
        }
    }

    //--------------------------------------------------------------------

}
