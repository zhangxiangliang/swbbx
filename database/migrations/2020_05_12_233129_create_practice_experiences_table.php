<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePracticeExperiencesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('practice_experiences', function (Blueprint $table) {
            // 标识
            $table->id();

            // 数据结构
            $table->integer('level')->default(0)->comment('修炼等级');
            $table->integer('experience')->default(0)->comment('修炼经验');

            // 时间线
            $table->dateTime('created_at');
            $table->dateTime('updated_at');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('practice_experiences');
    }
}
