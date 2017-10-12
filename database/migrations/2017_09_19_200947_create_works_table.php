<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateWorksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('works', function (Blueprint $table) {
            $table->increments('id');
            $table->string('imagen');
            $table->string('titulo');
            $table->string('subtitulo');
            $table->mediumText('descripcion');
            $table->string('link');
            $table->string('tag1');
            $table->string('tag2');
            $table->string('tag3');
            $table->string('nombre1');
            $table->string('nombre2');
            $table->string('nombre3');
            $table->string('cliente');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('works');
    }
}
