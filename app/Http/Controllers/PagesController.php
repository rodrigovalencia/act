<?php

namespace App\Http\Controllers;

use App\Estado;
use App\Http\Requests\CsvImportRequest;
use App\SATI;
use Illuminate\Support\Carbon;
use Symfony\Component\HttpKernel\Tests\HttpCache\request;

class PagesController extends Controller
{
	function index(){
		return view('index');
	}
}
