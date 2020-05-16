<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMeetingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('meetings', function (Blueprint $table) {
            // 标识
            $table->id();
            $table->integer('official_id')->default(0)->comment('官职 ID');
            $table->integer('level_experience_id')->default(0)->comment('等级 ID');

            // 数据结构
            $table->string('name')->default('')->comment('奇遇名称');
            $table->string('group')->default('')->comment('奇遇系列');
            $table->string('description')->default('')->comment('奇遇描述');

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
        Schema::dropIfExists('meetings');
    }
}
