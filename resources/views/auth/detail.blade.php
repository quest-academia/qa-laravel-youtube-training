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
                <form class="new_user" id="new_user" action="" accept-charset="UTF-8" method="post" enctype="multipart/form-data">
                @csrf
                    <div class="form-group">
                        <label class="form-label" for="name">名前</label>
                        <input name="name" type="text" value="{{ old('name') }}" class="form-control">
                    </div>

                    <div class="form-group">
                        <label class="form-label" for="email">メールアドレス</label>
                        <input name="email" type="email" value="{{ old('email') }}" class="form-control">
                    </div>

                    <div class="form-group">
                        <label class="form-label" for="password">パスワード</label>
                        <input name="password" type="password" class="form-control" 
                        maxlength="15" placeholder="6～15文字で設定してください">
                    </div>

                    <div class="form-group">
                        <label for="icon_url">アイコン画像（1MBまで）</label>
                        <br>
                        <input name="icon_url" type="file" accept="image/png, image/jpeg, image/jpg, image/gif">
                    </div>

                    <div class="form-group">
                        <label for="self_introduction_movie">自己紹介動画 </label>
                        <br>
                        <input name="self_introduction_movie" type="url" 
                        value="{{ old('self_introduction_movie') }}" class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="twitter_url">ツイッターURL </label>
                        <br>
                        <input name="twitter_url" type="url" value="{{ old('twitter_url') }}" class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="github_url">GitHubのURL </label>
                        <br>
                        <input name="github_url" type="url" value="{{ old('github_url') }}" class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="instagram_url">InstagramのURL</label>
                        <br>
                        <input name="instagram_url" type="url" value="{{ old('instagram_url') }}" class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="blog_url">blog URL</label>
                        <br>
                        <input name="blog_url" type="url" value="{{ old('blog_url') }}" class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="tag_checkbox">タグ選択</label>
                        <br>
                        <div class="form-check form-check-inline">
                            <input name="tag_checkbox[]" type="checkbox" class="form-check-input" value="1" 
                            {{ is_array(old('tag_checkbox')) && in_array(1, old('tag_checkbox')) ? 'checked' : '' ; }}>
                            <label class="form-check-label" for="tag_checkbox1">PHP</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input name="tag_checkbox[]" type="checkbox" class="form-check-input" value="2" 
                            {{ is_array(old('tag_checkbox')) && in_array(2, old('tag_checkbox')) ? 'checked' : '' ; }}>
                            <label class="form-check-label" for="tag_checkbox2">Java</label>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="course_checkbox">コース選択</label>
                        <br>
                        <div class="form-check form-check-inline">
                            <input name="course_checkbox[]" type="checkbox" class="form-check-input" value="1" 
                            {{ is_array(old('course_checkbox')) && in_array(1, old('course_checkbox')) ? 'checked' : '' ; }}>
                            <label class="form-check-label" for="course_checkbox1">Laravel講座</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input name="course_checkbox[]" type="checkbox" class="form-check-input" value="2" 
                            {{ is_array(old('course_checkbox')) && in_array(2, old('course_checkbox')) ? 'checked' : '' ; }}>
                            <label class="form-check-label" for="course_checkbox2">Vue.js講座</label>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="form-label" for="self_sentence">自己紹介文</label>
                        <br>
                        <textarea name="self_sentence" class="form-control" rows="10" 
                        placeholder="あとで設定したい場合は空欄にしてください">{{ old('self_sentence') }}</textarea>
                    </div>

                    <div class="actions text-center my-5">
                        <input type="submit" name="commit" value="登録" class="btn btn-primary w-auto">
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
