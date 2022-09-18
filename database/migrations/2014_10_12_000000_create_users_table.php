<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // ユーザテーブルのカラム設定
        Schema::create('users', function (Blueprint $table) {
            $table->id()->comment('ユーザID');
            $table->string('name',50)->comment('ユーザ名');
            $table->string('email',50)->unique()->comment('メールアドレス');
            $table->timestamp('email_verified_at')->nullable()->comment('メール確認機能');
            $table->string('password',256)->comment('パスワード');
            $table->text('self_sentence')->nullable()->comment('自己紹介文');
            $table->text('icon_url')->nullable()->comment('アイコンURL');
            $table->boolean('administrator_flag')->comment('管理者フラグ');
            $table->text('twitter_url')->nullable()->comment('ツイッターのURL');
            $table->text('instagram_url')->nullable()->comment('インスタグラムのURL');
            $table->text('blog_url')->nullable()->comment('ブログのURL');
            $table->text('github_url')->nullable()->comment('GitHubのURL');
            $table->rememberToken()->comment('パスワードリセット用トークン');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
