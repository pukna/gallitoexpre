<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddDriveIdColumnFreightreport extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('freightreports', function (Blueprint $table) {
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
        Schema::table('freightreports', function (Blueprint $table) {
            $table->dropForeign(['drive_id']);
        });
    }
}
