<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateQuestionsTable extends Migration
{
    public function up()
    {
        Schema::create('questions', function(Blueprint $table) {
            $table->increments('id');
            $table->string('category');
            $table->string('question');
            $table->string('answer');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::drop('questions');
    }
}
