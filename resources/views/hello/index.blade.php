
@extends('layouts.helloapp')

@section('title','Index')

@section('menubar')
	@parent
	インデックスページ
@endsection

@section('content')
	<p>ここが本文のコンテンツです</p>
	<P>Controller value<br>'message'+{{$message}}</P>
	<p>ViewComposer value<br>'view_message' = {{$view_message}}</p>

@endsection

@section('footer')
copylight 2017
@endsection

