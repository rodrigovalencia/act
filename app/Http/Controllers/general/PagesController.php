<?php

namespace App\Http\Controllers\general;

use App\Http\Controllers\Controller;

class PagesController extends Controller
{
	function index(){
		return view('auth.login');
	}
}