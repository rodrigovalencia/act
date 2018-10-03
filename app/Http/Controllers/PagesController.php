<?php

namespace App\Http\Controllers;

use Illuminate\Support\Carbon;
use Symfony\Component\HttpKernel\Tests\HttpCache\request;

class PagesController extends Controller
{
	function index(){
		return view('auth.login');
	}
}