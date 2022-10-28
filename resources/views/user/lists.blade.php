@extends('layouts.app')
@section('content')
<h1 class="text-center mb-5">ユーザー一覧</h1>
<form action="{{ route('user.list') }}" class="mb-3">
    <div class="form-group row">
        <div class="col-2"></div>
        <label for="inputEmail3" class="col-2 col-form-label">
            キーワード
        </label>
        <div class="col-6">
          <input type="text" name="search"
                 value="{{ $search }}"
                 class="form-control"
                 placeholder="">
        </div>
        <div class="col-2"></div>
    </div>
    <div class="form-group row">
      <div class="col-2"></div>
      <label for="inputPassword3" class="col-2 col-form-label">
          タグで検索
      </label>
      <div class="col-6">
          <div class="form-check form-check-inline">
              <input name="tag_checkbox[]" type="checkbox" class="form-check-input" value="1"
                  {{ is_array($search_tag) && in_array(1, $search_tag) ? 'checked' : '' ; }}>
              <label class="form-check-label" for="tag_checkbox1">PHP</label>
          </div>
          <div class="form-check form-check-inline">
              <input name="tag_checkbox[]" type="checkbox" class="form-check-input" value="2"
                  {{ is_array($search_tag) && in_array(2, $search_tag) ? 'checked' : '' ; }}>
              <label class="form-check-label" for="tag_checkbox2">JavaScript</label>
          </div>
      </div>
      <div class="col-2"></div>
    </div>
        <div class="text-center">
            <button type="submit" id="btn-search" class="btn btn-primary">
                <i class="fas fa-search"></i>キーワードで絞り込む
            </button>
        </div>
    </div>
</form>
<div class="row mb-3">
    <div class="col-2"></div>
        <div class="col-8 border">
            @if ($users->isNotEmpty())
            <table class="table">
                <tbody>
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
                    <td class="col-9">
                        <a href="/users/{{$user->id}}">
                            <p class="text-left">
                                {{$user->name}}<br>
                                {{-- フェーズ２のタグ出力 --}}
                            </p>
                        </a>
                    </td>
                </tr>
                @endforeach
                </tbody>
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
