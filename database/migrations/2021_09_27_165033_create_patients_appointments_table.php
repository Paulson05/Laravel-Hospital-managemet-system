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
            $table->string('appointment_id');
            $table->string('name');
            $table->string('email');
            $table->string('phone_number');
            $table->string('doctor');
            $table->string('department');
            $table->string('date');
            $table->string('time');
            $table->string('message');
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
