<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTitlesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('titles', function (Blueprint $table) {
            // 标识
            $table->id();
            $table->integer('map_id')->default(0)->comment('所属地图');
            $table->integer('npc_id')->default(0)->comment('所属导师');

            // 数据结构
            $table->string('name')->default('')->comment('称谓');
            $table->json('tags')->nullable()->comment('标签');
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
        Schema::dropIfExists('titles');
    }
}
