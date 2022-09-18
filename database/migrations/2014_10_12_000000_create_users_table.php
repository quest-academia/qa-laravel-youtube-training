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
            $table->id(); // ユーザID
            $table->string('name',50); // ユーザ名（50文字以内）
            $table->string('email',50)->unique(); // メールアドレス（固有、50文字以内）
            $table->timestamp('email_verified_at')->nullable(); // メール確認機能（デフォルトはnull）
            $table->string('password',256); // パスワード（256文字以内）
            $table->text('self_sentence')->nullable(); // 自己紹介文（空欄可）
            $table->text('icon_url')->nullable(); // アイコンURL（空欄可）
            $table->boolean('administrator_flag'); // 管理者フラグ
            $table->text('twitter_url')->nullable(); // ツイッターのURL（空欄可）
            $table->text('instagram_url')->nullable(); // インスタグラムのURL（空欄可）
            $table->text('blog_url')->nullable(); // ブログのURL（空欄可）
            $table->text('github_url')->nullable(); // GitHubのURL（空欄可）
            $table->rememberToken(); // トークン(パスワードリセット用)
            $table->timestamps(); // 作成日と更新日
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
