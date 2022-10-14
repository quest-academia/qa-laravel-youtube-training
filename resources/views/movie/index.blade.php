@extends('layouts.app')
@section('content')
<h1 class="center-block">動画　一覧画面</h1>
<div class="row">
    @if($movies)
    @foreach ($movies as $movie)
    <div class="col-md-4">{{$movie->title}}{{$movie->url}}{{$movie->user->name}}</div>
    @endforeach
    @endif
</div>
@endsection
