<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserTagsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // ユーザタグテーブルのカラム設定
        Schema::create('user_tags', function (Blueprint $table) {
            $table->id()->comment('ユーザタグID');
            $table->integer('user_id')->comment('ユーザID');
            $table->integer('tag_id')->comment('タグID');
            $table->timestamps();
            $table->foreignId('user_id')
                ->constrained('users')
                ->cascadeOnDelete()
                ->cascadeOnUpdate();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('user_tags');
    }
}
