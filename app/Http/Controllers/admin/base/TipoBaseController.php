<?php

namespace App\Http\Controllers\admin\base;

use App\TipoBase;
use App\Http\Controllers\Controller;

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
