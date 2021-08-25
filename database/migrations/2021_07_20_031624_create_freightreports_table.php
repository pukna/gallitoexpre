<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFreightreportsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('freightreports', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('Fecha');
            $table->string('Socio');
            $table->string('Conductor');
            $table->string('N_Carro');
            $table->string('Despachado por');
            $table->string('Quien_paga');
            $table->string('N_Bultos');
            $table->string('Detalles');
            $table->string('N_Factura');
            $table->string('Cobro_en');
            $table->string('Subtotal');
            $table->string('Flete_total');
            $table->string('Le_debemos');



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
        Schema::dropIfExists('freightreports');
    }
}
