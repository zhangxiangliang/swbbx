<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLevelExperiencesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('level_experiences', function (Blueprint $table) {
            // 标识
            $table->id();

            // 数据结构
            $table->integer('sort')->default(0)->comment('排序');
            $table->integer('level')->default(0)->comment('等级');
            $table->json('star')->nullable()->comment('物品出处');
            $table->integer('experience')->default(0)->comment('等级经验');

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
        Schema::dropIfExists('level_experiences');
    }
}
