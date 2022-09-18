<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserModelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // ユーザモデルテーブルのカラム設定
        Schema::create('user_models', function (Blueprint $table) {
            $table->id()->comment('ユーザモデルID');
            $table->integer('user_id')->comment('ユーザID');
            $table->integer('followed_user_id')->comment('フォローユーザID');
            $table->timestamps()->comment('作成日と更新日');
            $table->foreignId('user_id')
                ->constrained('users')
                ->cascadeOnDelete()
                ->cascadeOnUpdate()
                ->comment('外部キー制約');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('user_models');
    }
}
