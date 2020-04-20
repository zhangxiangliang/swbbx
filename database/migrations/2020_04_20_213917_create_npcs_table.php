<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNpcsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('npcs', function (Blueprint $table) {
            // 标识
            $table->id();
            $table->integer('map_id')->default(0)->comment('NPC地图');

            // 数据结构
            $table->string('name')->nullable()->comment('NPC名称');
            $table->string('cover')->nullable()->comment('NCP封面');
            $table->string('description')->nullable()->comment('NPC描述');

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
        Schema::dropIfExists('npcs');
    }
}
