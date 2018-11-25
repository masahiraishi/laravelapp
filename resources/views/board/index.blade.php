@extends('layouts.helloapp')

@section('title','Board.index')

@section('menubar')
    @parent
    ボード・ページ
@endsection

@section('content')
    <p><a href="/board/add">追加</a> <a href="/person">一覧</a></p>
    <table>
        <tr><th>Message</th><th>Name</th></tr>
        @foreach($items as $item)
            <tr>
                <td>{{$item->message}}</td>
                {{--{{var_dump($item->person)}}--}}
                <td>{{$item->person['name']}}</td>
            </tr>
        @endforeach
    </table>
@endsection


@section('footer')
    copyright 2017 masashi.
@endsection
