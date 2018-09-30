

@extends('layouts.helloapp')

@section('title',Index)

@section('menubar')
@parent
	インデックスページ
@endsection

@section('content')
<p>ここが本文のコンテンツです</p>
<P>必要な記述できます</P>
@endsection

@section('footer')
copylight 2017
@endsection










<html>
<head>
	<title>Hello/Index</title>
	<style>
	body { font-size:16pt;color:#999; }
	h1 { font-size:50px; text-align:right; color:#f6f6f6;
		margin:-20px 0px -30px 0px; letter-spacing:-4px;}
	</style>
</head>
<body>
	<h1>Blade/Index</h1>
	<p>&#064;foreach ディレクティブの例</p>
	<ol>
	@php
	$counter = 0;
	@endphp
	@while ($counter< count($data))
	<li>{{$data[$counter]}}</li>
	@php
	$couunter++;
	@endphp
	@endwhile
	</ol>
</body>
</html>