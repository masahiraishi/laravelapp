<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;


class HelloController extends Controller
{
	public function index (request $request){

		$data = [
			'msg' =>'これはBladeを利用したサンプルです',

		];
		return view('hello.index',$data);
	}

}
