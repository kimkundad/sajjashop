<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable();
            $table->string('name2')->nullable();
            $table->text('detail')->nullable();
            $table->text('image')->nullable();
            $table->integer('ban')->default('0');
            $table->integer('cat')->default('0');
            $table->text('price_image')->nullable();
            $table->float('price', 8, 2)->default('0.0');
            $table->integer('discount')->default('0');
            $table->integer('hit')->default('0');
            $table->integer('view')->default('0');
            $table->integer('recommend')->default('0');
            $table->integer('stock')->default('0');
            $table->integer('status')->default('0');
            $table->integer('status_2')->default('0');
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
        Schema::dropIfExists('products');
    }
}
