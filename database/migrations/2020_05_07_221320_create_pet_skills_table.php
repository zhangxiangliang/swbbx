<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePetSkillsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pet_skills', function (Blueprint $table) {
            // 标识
            $table->id();

            // 结构数据
            $table->string('name')->default('')->comment('技能名称');
            $table->string('cover')->default('')->comment('技能封面');
            $table->string('category')->default('')->comment('技能分类');
            $table->string('description')->default('')->comment('技能描述');
            $table->string('sort')->default('')->comment('技能排序');

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
        Schema::dropIfExists('pet_skills');
    }
}
