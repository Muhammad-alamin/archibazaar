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
            $table->unsignedBigInteger('product_category_id');
            $table->foreign('product_category_id')->references('id')->on('category_products');
            $table->string('product_name');
            $table->string('supplier_name')->nullable();
            $table->string('supplier_id')->nullable();
            $table->longText('description')->nullable();
            $table->string('specification')->nullable();
            $table->text('image')->nullable();
            $table->text('catalogues')->nullable();
            $table->text('drawing_file')->nullable();
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
