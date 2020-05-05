<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            // 标识
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->string('password');

            // 用户数据
            $table->string('open_id')->nullable();
            $table->string('avatar')->nullable();
            $table->string('introduction')->nullable();
            $table->integer('notification_count')->unsigned()->default(0);

            // 作者数据
            $table->string('mp_name')->nullable();
            $table->string('mp_qrcode')->nullable();
            $table->string('mp_introduction')->nullable();

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
        Schema::dropIfExists('users');
    }
}
