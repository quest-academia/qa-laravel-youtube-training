@extends('layouts.app')
@section('content')
<a class="" href="{{route('movie.index')}}">&lt&lt一覧に戻る</a>
<h1 class="mt-3">{{$movie->title}}</h1>
 <div class="d-flex justify-content-center">
 <iframe src="{{$movie->getYoutubeEmbedURL()}}" width="560" height="315" frameborder="0" class="mx-auto w-60 mw-100 m-5"></iframe>
 </div>
<h2>概要</h2>
<p>{!! nl2br(htmlspecialchars($movie->description)) !!}</p>
{{-- @if($movie->user_id === Auth::user()->id) --}}
<div class="row mt-5 mb-5">
    <div class="col"><a class="d-flex justify-content-center btn btn-primary btn-lg" href="{{route('movie.edit',$movie->id)}}">動画を編集する</a></div>
    <div class="col"><a class="d-flex justify-content-center btn btn-secondary btn-lg" href="{{route('movie.delete',$movie->id)}}">動画を削除する</a></div>
</div>
{{-- @endif --}}
@endsection
