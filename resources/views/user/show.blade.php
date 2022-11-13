@extends('layouts.app')
@section('content')
<h1 class="my-5 text-center">ユーザ情報</h1>
<div class="d-flex">
    @if(!empty($user->icon_url))
        <figure class="icon_url">
            <img src="/storage/images/{{ $user->icon_url }}" width="200" height="200">
        </figure>
    @else
        <figure class="icon_url">
            <img src="/storage/images/nico.jpg" width="200" height="200" class="icon_url">
        </figure>
    @endif
    <p class="text-left ml-5">
        <font size="5">名前&emsp;&emsp;&emsp;&emsp;&emsp;{{ $user->name }}</font><br>
        <font size="5">自己紹介文&emsp;&emsp;{{ $user->self_sentence }}</font><br>
        @if(!empty($user->blog_url))
            <font size="5">blog&emsp;&emsp;&emsp;&emsp;&emsp;{{ $user->blog_url }}</font><br>
        @endif
        <font size="5">タグ&emsp;&emsp;&emsp;&emsp;&emsp;{{ $user->tag_checkbox }}</font><br>
    </p>
</div>
<div class="d-flex justify-content-around m-5">
    @if(!empty($user->twitter_url))
        <figure class="sns_icon">
            <img src="/storage/images/twitter_icon.png" width="150" height="150">
        </figure>
    @endif
    @if(!empty($user->github_url))
        <figure class="sns_icon">
            <img src="/storage/images/github_icon.png" width="150" height="150">
        </figure>
    @endif
    @if(!empty($user->instagram_url))
        <figure class="sns_icon">
            <img src="/storage/images/instagram_icon.png" width="150" height="150">
        </figure>
    @endif
</div>
<div class="text-center">
    <a href="{{ route('user.list') }}" class="btn btn-primary my-4">ユーザー一覧に戻る</a>
</div>
@endsection