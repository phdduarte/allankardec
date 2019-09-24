<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateManuscriptTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('manuscritos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('titulo',60)->nullable();
            $table->text('criadores')->nullable();
            $table->string('data',60)->nullable();
            $table->text('local')->nullable();
            $table->text('idioma')->nullable();
            $table->integer('numero')->nullable();
            $table->string('tipo',60)->nullable();
            $table->binary('pic')->nullable();
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
        Schema::drop('manuscritos');
    }
}
