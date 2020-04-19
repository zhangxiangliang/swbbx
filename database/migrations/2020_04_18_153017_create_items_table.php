<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('items', function (Blueprint $table) {
            // 标识
            $table->id();

            // 数据结构
            $table->string('name')->nullable()->comment('物品名称');
            $table->string('cover')->nullable()->comment('物品封面');
            $table->json('keywords')->nullable()->comment('物品关键词');
            $table->string('category')->nullable()->comment('物品分类');
            $table->string('level')->nullable()->comment('物品等级');
            $table->string('description')->nullable()->comment('物品描述');
            $table->string('use')->nullable()->comment('物品使用');
            $table->json('maps')->nullable()->comment('物品出处');

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
        Schema::dropIfExists('items');
    }
}
