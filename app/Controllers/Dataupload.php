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
                'rules' => 'required[file_ijazah]',
                'errors'    => [
                    'required'  => 'Scan ijazah wajib di isi!'
                ]
            ],
            'file_skhun'    => 'required[file_skhun]',
            'file_kk'    => 'required[file_kk]',
            'file_akte'    => 'required[file_akte]',
        ])) {
            $validation = \Config\Services::validation();
            return redirect()->to('/dataupload')->withInput()->with('validation', $validation);
        }
    }

    //--------------------------------------------------------------------

}
