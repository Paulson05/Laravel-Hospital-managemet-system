<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDoctorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('doctors', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('username');
            $table->string('email');
            $table->string('employer_id');
            $table->string('specialist');
            $table->string('address');
            $table->string('degree');
            $table->enum('gender',['male', 'female']);
            $table->string('D_O_B');
            $table->string('country');
            $table->string('phone');
            $table->mediumText('description');
            $table->string('photo')->nullable();
            $table->enum('status',['active', 'inactive'])->default('inactive');
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
        Schema::dropIfExists('doctors');
    }
}
