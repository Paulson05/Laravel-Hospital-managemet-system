<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMedecinesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('medecines', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('expire_date');
            $table->integer('price');
            $table->integer('qty');
            $table->string('product_code')->nullable();
//            $table->longText('barcode')->nullable();
            $table->string('description');
            $table->integer('alert_stock')->default('100');
            $table->string('status');
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
        Schema::dropIfExists('medecines');
    }
}
