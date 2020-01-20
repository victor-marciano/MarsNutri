<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRefeicaoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('refeicao', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nome');
            $table->time('horario');
            $table->unsignedBigInteger('dieta_id');
            $table->foreign('dieta_id')->references('id')->on('dieta');
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
        Schema::dropIfExists('refeicao');
    }
}
