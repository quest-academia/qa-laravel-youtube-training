@extends('layouts.app')
@section('content')
<h1>{{$movie->title}}</h1>
<iframe src="{{$movie->url}}" frameborder="0" class="w-100 m-5"></iframe>
<h2>概要</h2>
<p>{!! nl2br(htmlspecialchars($movie->description)) !!}</p>
{{-- @if($movie->user_id === Auth::user()->id) --}}
<div>
    <p></p>
</div>
{{-- @endif --}}
@endsection
