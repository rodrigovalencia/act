<?php

namespace App\Http\Controllers;

use App\TipoBase;
use Illuminate\Http\Request;

class TipoBaseController extends Controller
{
	/**
	 * Display a listing of the resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function index()
	{
		$tipos = TipoBase::all();
		return view('admin.base.tipoBase.index', compact('tipos'));
	}
}
