<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Session;
class AboutController extends Controller
{
	public function index()
	{
		Session::put('aktif',4);

		$hola = [
			'title'=>'Pengenalan About',
			'message'=>'Halamn pengenalan kelompok 1 , Abdulloh Aqil - Zulfikar rahhman'
		];
		return view('about',$hola);
	}
}