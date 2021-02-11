<?php

namespace App\Controllers;

class Download extends BaseController
{
    public function index()
    {
        $folder = ROOTPATH . '\public\asset\img';
        $this->zipFile
            ->addDirRecursive($folder)
            ->outputAsAttachment('coba.zip'); // output to the browser without saving to a file
    }

    //--------------------------------------------------------------------

}
