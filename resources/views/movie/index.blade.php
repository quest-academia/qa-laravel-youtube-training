@extends('layouts.app')
@section('content')
<h1 class="mb-5">自己紹介動画　一覧</h1>
<form action="{{ route('movie.index') }}" class="mb-3">
    <div class="input-group d-flex justify-content-end">
        <input type="text" name="search" id="txt-search"
        class="text-left m-2 input-group-text input-group-prepend"
        value="@if(isset($search)){{$search}}@endif"
        placeholder="キーワードを入力"></input>
        <span class="input-group-btn input-group-append">
            <button type="submit" id="btn-search" class="btn btn-primary"><i class="fas fa-search"></i>キーワードで絞り込む</button>
        </span>
    </div>
</form>
<div class="row">
    @if($movies->isNotEmpty())
    @foreach ($movies as $movie)
    <div class="col-md-4">
        <p class="text-right">{{$movie->user->name}}</p>
        <a href="/movie/{{$movie->id}}">
            <img class="w-100" src="{{$movie->getYoutubeThumbnailURL()}}" alt="">
        </a>
        <h2 class="text-center mb-3">{{$movie->title}}</h2>
    </div>
    @endforeach
    @else
    <p class="mt-3">動画が見つかりませんでした。</p>
    @endif
</div>
<div class="d-flex justify-content-center mt-5 mb-5">
    {!! $movies->appends(['search'=>$search])->render() !!}
</div>
@endsection
