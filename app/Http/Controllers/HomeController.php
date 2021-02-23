<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Session;
class HomeController extends Controller
{
	public function index()
	{
		Session::put('aktif',1);
		$hola = [
			'title'=>'Pengenalan Home',
			'message'=>'Halamn pengenala kelompok 1 , Abdulloh Aqil - Zulfikar rahhman'
		];
		return view('home',$hola);
	}
}