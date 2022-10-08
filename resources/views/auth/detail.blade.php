@extends('layouts.app')
@section('content')
    <div class="container-fluid mt-5">
        <div class="row align-items-center justify-content-center p-5">
            <div class="col-sm-8 col-md-7 col-lg-6">
                <div class="form-group text-center">
                    <h2 class="logo-img mx-auto">
                    お客様情報登録
                    </h2>
                </div>
                <form class="new_user" id="new_user" action="" accept-charset="UTF-8" method="post">
                @csrf
                    <div class="form-group">
                        <label class="form-label" for="name">名前</label>
                        <input id="name" type="text" class="form-control" name="name">
                    </div>

                    <div class="form-group">
                        <label class="form-label" for="email">メールアドレス</label>
                        <input id="email" type="email" class="form-control" name="email">
                    </div>

                    <div class="form-group">
                        <label class="form-label" for="password">パスワード</label>
                        <input id="password" type="password" class="form-control" name="password">
                    </div>

                    <div class="form-group">
                        <label for="image">アイコン画像 </label>
                        <br>
                        <input id="icon-image" type="file" accept="image/png, image/jpeg, image/jpg, image/gif" name="icon-image">
                    </div>

                    <div class="form-group">
                        <label for="self-introduction-movie">自己紹介動画 </label>
                        <br>
                        <input id="self-introduction-movie" type="url" name="self-introduction-movie" size="56">
                    </div>

                    <div class="form-group">
                        <label for="twitter-url">ツイッターURL </label>
                        <br>
                        <input id="twitter-url" type="url" name="twitter-url" size="56">
                    </div>

                    <div class="form-group">
                        <label for="GitHub-url">GitHubのURL </label>
                        <br>
                        <input id="GitHub-url" type="url" name="GitHub-url" size="56">
                    </div>

                    <div class="form-group">
                        <label for="Instagram-url">InstagramのURL</label>
                        <br>
                        <input id="Instagram-url" type="url" name="Instagram-url" size="56">
                    </div>

                    <div class="form-group">
                        <label for="blog-url">blog URL</label>
                        <br>
                        <input id="blog-url" type="url" name="blog-url" size="56">
                    </div>

                    <div class="form-group">
                        <label for="tag-checkbox">タグ選択</label>
                        <br>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" id="tag-checkbox1">
                            <label class="form-check-label" for="tag-checkbox1">PHP</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" id="tag-checkbox2">
                            <label class="form-check-label" for="tag-checkbox2">Java</label>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="course-checkbox">コース選択</label>
                        <br>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" id="course-checkbox1">
                            <label class="form-check-label" for="course-checkbox1">Laravel講座</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" id="course-checkbox2">
                            <label class="form-check-label" for="course-checkbox2">Vue.js講座</label>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="form-label" for="self-introduction-textarea">自己紹介文</label>
                        <br>
                        <textarea class="form-control" id="self-introduction-textarea" rows="10" placeholder="あとで設定したい場合は空欄にしてください" name="self-introduction-sentense"></textarea>
                    </div>

                    <div class="actions text-center my-5">
                        <input type="submit" name="commit" value="登録" class="btn btn-primary w-auto">
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection