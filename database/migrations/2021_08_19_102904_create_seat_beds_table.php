<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSeatBedsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('seat_beds', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('seat_no');
            $table->string('floor_no');
            $table->string('rent');
            $table->string('room');
            $table->string('photo')->nullable();
            $table->enum('empty',['empty', 'full']);
            $table->enum('type',['cabin', 'kingsize']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('seat_beds');
    }
}
