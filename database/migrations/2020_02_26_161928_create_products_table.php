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
            $table->bigIncrements('id');
            $table->unsignedBigInteger('category_id');
            $table->string('name');
            $table->text('description');
            $table->decimal('price', 8, 2)->unsigned();
            $table->integer('volume')->unsigned();
            $table->decimal('vat', 5, 2);
            $table->integer('stock')->unsigned();
            $table->decimal('weight', 7, 2);
            $table->timestamps();

            $table->foreign('category_id')->references('id')->on('categories');
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
