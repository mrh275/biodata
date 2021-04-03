<?php

namespace App\Controllers;

class Home extends BaseController
{
	public function index()
	{

		$data = [
			'title'		=> 'Form Biodata | PPDB SMA Negeri 1 Rawamerta'
		];

		return view('front/front', $data);
	}

	//--------------------------------------------------------------------

}
