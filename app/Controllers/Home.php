<?php

namespace App\Controllers;

class Home extends BaseController
{
	public function index()
	{
<<<<<<< HEAD
		//return view('dashboards/index');
		return view('header').view('body').view('footer');
=======
		echo view('header_');
		echo view('contenido_');
		echo view('footer_');
>>>>>>> 0e3ccf7830bad4bfb183ec5c54ffc5878a5f6131
	}
}