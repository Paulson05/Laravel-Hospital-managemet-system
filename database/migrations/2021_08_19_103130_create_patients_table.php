<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePatientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('patients', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('occupation');
            $table->string('relative');
            $table->string('gender');
            $table->string('relative_name');
            $table->string('current_address');
            $table->string('permanent_address');
            $table->string('visiting_doctor');
            $table->string('floor_bed');
            $table->string('email');
            $table->string('photo');
            $table->string('d_o_b');
            $table->string('patient_number');
            $table->string('home_phone');
            $table->string('blood_group');
            $table->string('religion');
            $table->string('patient_type');
            $table->string('symptoms');
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
        Schema::dropIfExists('patients');
    }
}
