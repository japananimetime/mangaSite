<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMangasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mangas', function (Blueprint $table) {
            $table->increments('id');
			$table->string('Title');
			$table->string('descripton');
			$table->string('cover');
			$table->mediumInteger('volumes');
			$table->mediumInteger('chapters');
			$table->integer('downloaded');
			$table->smallInteger('grade');
			$table->dateTime('date_add');
			$table->dateTime('date_updated');
			$table->integer('releaser_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('mangas');
    }
}
