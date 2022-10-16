@extends('layouts.app')
@section('content')
<h1 class="mb-5">自己紹介動画　一覧</h1>
<div class="row">
    @if($movies->isNotEmpty())
    @foreach ($movies as $movie)
    <div class="col-md-4">
        <p class="text-right">{{$movie->user->name}}</p>
        <a href="/movie/" target="_blank" rel="noopenner">
            <img class="w-100" src="{{$movie->getYoutubeThumbnailURL()}}" alt="">
        </a>
        <h2 class="text-center">{{$movie->title}}</h2>
    </div>
    @endforeach
    @endif
</div>
<div class="d-flex justify-content-center mt-5 mb-5">
    {!! $movies->links() !!}
</div>
@endsection
