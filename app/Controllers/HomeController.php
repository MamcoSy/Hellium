<?php

namespace App\Controllers;

use LiteFramework\View\View;

class HomeController
{
	public function index()
	{
		return View::render('home.index');
	}
}
