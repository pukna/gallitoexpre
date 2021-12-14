<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddEnteredThePortIdColumnDriver extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('entered_the_ports', function (Blueprint $table) {
            $table->unsignedBigInteger('drive_id');
            $table->foreign('drive_id')->references('id')->on('drives')->onDelete('restrict');
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('drives', function (Blueprint $table) {
            $table->dropForeign(['enteredThePort_id']);
        });
    }
}
