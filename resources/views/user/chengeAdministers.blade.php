@extends('layouts.app')
@section('content')
<h1 class="text-center mb-5">ユーザー一覧</h1>
<form action="{{ route('user.chengeAdministerList') }}" class="mb-3">
    <div class="form-group row">
        <div class="col-2"></div>
        <label for="inputEmail3" class="col-2 col-form-label">
            ユーザー名
        </label>
        <div class="col-6">
          <input type="text" name="search"
                 value="{{ $search }}"
                 class="form-control"
                 placeholder="">
        </div>
        <div class="col-2"></div>
    </div>
    <div class="text-center">
        <button type="submit" id="btn-search" class="btn btn-primary">
            <i class="fas fa-search"></i>&nbsp;検索する
        </button>
    </div>
</form>
<div class="row mb-3">
    <div class="col-2"></div>
        <div class="col-8 border">
            @if ($users->isNotEmpty())
            <table class="table ">
                <tr class="row">
                    <td class="col-3"></td>
                    <td class="col-4 d-flex align-items-center text-left">
                        <p>ユーザ情報</p>
                    </td>
                    <td class="col-5 d-flex align-items-center text-left">
                        <p>管理者フラグ</p>
                    </td>
                </tr>
                @foreach ($users as $user)
                <tr class="row">
                    <td class="col-3">
                        @if ($user->icon_url != Null)
                            <img class="w-100 ml-3"
                                 src="{{asset('/storage/images/'.$user->icon_url)}}">
                        @else
                            <img class="w-100 ml-3"
                                 src="{{asset('/storage/images/nico.jpg')}}">
                        @endif
                    </td>
                    <td class="col-4 d-flex align-items-center text-left">
                        <a href="/users/{{$user->id}}">
                            <p>
                                {{$user->name}}<br>
                                {{-- フェーズ２のタグ出力 --}}
                            </p>
                        </a>
                    </td>
                    <td class="col-5 d-flex align-items-center text-left">
                        <a href="/administer/users/{{$user->id}}">
                            <p>
                                @if ($user->administrator_flag)
                                    一般に変更する。
                                @else
                                    管理者に変更する。
                                @endif
                            </p>
                        </a>
                    </td>
                </tr>
                @endforeach
            </table>
            @else
            <p class="mt-3">ユーザーが見つかりませんでした。</p>
            @endif
        </div>
    <div class="col-2"></div>
</div>
<div class="d-flex justify-content-center mt-5 mb-5">
    {!! $users->appends(['search'=>$search])->render() !!}
</div>
@endsection
