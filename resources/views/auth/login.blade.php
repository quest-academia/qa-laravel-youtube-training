@extends('layouts.app')
@section('content')
    <div class="container-fluid mt-5">
        <div class="row align-items-center justify-content-center p-5">
            <div class="col-sm-8 col-md-7 col-lg-6">
                <div class="form-group text-center">
                    <h2 class="logo-img mx-auto">
                    ログイン
                    </h2>
                </div>
                <form class="new_user" id="new_user" action="" accept-charset="UTF-8" method="post">
                @csrf
                    <div class="form-group">
                        <label class="form-label" for="email">メールアドレス</label>
                        <input id="email" type="email" class="form-control" name="email">
                    </div>

                    <div class="form-group">
                        <label class="form-label" for="password">パスワード</label>
                        <input id="password" type="password" class="form-control" name="password">
                    </div>

                    <div class="actions text-center">
                        <input type="submit" name="commit" value="ログイン" class="btn btn-primary w-auto">
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection