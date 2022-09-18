<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserCoursesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // ユーザコーステーブルのカラム設定
        Schema::create('user_courses', function (Blueprint $table) {
            $table->id(); // ユーザコースID
            $table->integer('user_id'); // ユーザID
            $table->integer('course_id'); // コースID
            $table->timestamps(); // 作成日と更新日
            $table->foreignId('user_id')
                ->constrained('users')
                ->cascadeOnDelete()
                ->cascadeOnUpdate(); // 外部キー制約
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('user_courses');
    }
}
