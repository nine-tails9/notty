<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFileinfosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fileinfos', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->integer('files_id');

            $table->integer('user_id');
            $table->integer('sem');

            $table->string('subject');

            $table->string('teacher');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('fileinfos');
    }
}
