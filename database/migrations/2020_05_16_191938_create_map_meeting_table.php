<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMapMeetingTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('map_meeting', function (Blueprint $table) {
            // 标识
            $table->id();
            $table->integer('map_id')->default(0)->comment('地图 ID');
            $table->integer('meeting_id')->default(0)->comment('奇遇 ID');

            // 数据结构
            $table->integer('x')->default(0)->comment('地图 ID');
            $table->integer('y')->default(0)->comment('奇遇 ID');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('map_meeting');
    }
}
