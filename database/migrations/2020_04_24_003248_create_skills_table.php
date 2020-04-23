<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSkillsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('skills', function (Blueprint $table) {
            // 标识
            $table->id();
            $table->integer('map_id')->default(0)->comment('所属地图');
            $table->integer('npc_id')->default(0)->comment('所属导师');

            // 结构数据
            $table->integer('open_level')->default(0)->comment('学习等级');
            $table->integer('level')->default(0)->comment('级别');
            $table->string('type')->default('')->comment('技能分类');
            $table->string('cost')->default('')->comment('技能消耗');
            $table->string('name')->default('')->comment('技能名称');
            $table->string('description')->default('')->comment('技能描述');

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
        Schema::dropIfExists('skills');
    }
}
