<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSchoolsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('schools', function (Blueprint $table) {
            // 标识
            $table->id();
            $table->integer('npc_id')->default(0)->comment('NPC id');
            $table->integer('map_id')->default(0)->comment('地图 id');

            // 数据结构
            $table->string('name')->default('')->comment('名称');
            $table->string('intro')->default('')->comment('简介');
            $table->string('description')->default('')->comment('描述');

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
        Schema::dropIfExists('schools');
    }
}
