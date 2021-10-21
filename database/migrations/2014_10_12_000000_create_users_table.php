<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {

            $table->increments('id');
            $table->string('name');
            $table->string('email')->unique();
            $table->integer('employer_id');
            $table->integer('departments_id');
            $table->string('specialist')->nullable();
            $table->string('address');
            $table->string('degree');
            $table->enum('gender',['male', 'female']);
            $table->string('D_O_B');
            $table->string('country');
            $table->string('phone');
            $table->mediumText('description');
            $table->string('photo')->nullable();
            $table->timestamp('email_verified_at')->nullable();
            $table->enum('status',['active', 'inactive'])->default('inactive');
            $table->string('password');
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
