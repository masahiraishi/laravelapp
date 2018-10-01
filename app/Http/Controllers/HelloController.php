<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;


class HelloController extends Controller
{
	public function index (){

		$data = [
				['name'=>'山田太郎','mail'=>'taro@yamada'],
				['name'=>'田中花子','mail'=>'hanako@flower'],
				['name'=>'すずきさちこ','mail'=>'sachico@happy']
		];
		return view('hello.index',['data'=>$data]);

	}


	public function post(Request $request){

		return view('hello.index',['msg'=>$request->msg]);

	}

}
