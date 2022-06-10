<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductdatasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('productdatas', function (Blueprint $table) {
            $table->id();
            $table->string('product_name');
            $table->string('category');
            $table->string('product_price');
            $table->string('product_desc');
   
            $table->string('product_oneimg');
            $table->string('email');
            $table->string('approval')->default(0);
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
        Schema::dropIfExists('productdatas');
    }
}
