<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePatientsAppointmentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('patients_appointments', function (Blueprint $table) {
            $table->increments('id');
            $table->string('number');
            $table->integer('serials_id');
            $table->string('full_number')->nullable();
            $table->integer('patients_id');
            $table->string('email');
            $table->string('phone_number');
            $table->integer('doctors_id');
            $table->string('departments_id');
            $table->string('date');
            $table->string('time');
            $table->string('message');
            $table->tinyInteger('status')->default(0)->comment('0=pending, 1=Approved');
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
        Schema::dropIfExists('patients_appointments');
    }
}
