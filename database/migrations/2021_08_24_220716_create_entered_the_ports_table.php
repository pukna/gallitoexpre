<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEnteredThePortsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('entered_the_ports', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('vSeguro');
            $table->string('tSeguto');
            $table->string('VEnteretPorts');
            $table->string('userEnterPort');
            $table->string('passEnterPort');
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
        Schema::dropIfExists('entered_the_ports');
    }
}
