<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLancamentosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lancamentos', function (Blueprint $table) {
            $table->id();
            $table->date('data_lancamento');
            $table->time('hora_lancamento');
            $table->string('estabelecimento');
            $table->integer('categoria_estabelecimento');
            $table->bigInteger('latitude_estabelecimento');
            $table->bigInteger('longitude_estabelecimento');
            $table->float('taxa_pontuacao');
            $table->float('valor_lancamento');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('lancamentos');
    }
}
