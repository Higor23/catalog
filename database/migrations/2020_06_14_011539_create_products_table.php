<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{

    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            
            $table->unsignedBigInteger('category_id');
            $table->foreign('category_id')->references('id')->on('categories')->onDelete('cascade');
            
            $table->unsignedBigInteger('subcategory_id')->nullable();
            $table->foreign('subcategory_id')->references('id')->on('subcategories')->onDelete('cascade');
            
            $table->unsignedBigInteger('tag_id')->nullable();
            $table->foreign('tag_id')->references('id')->on('tags')->onDelete('cascade');

            $table->string('name', 100)->unique();
            $table->string('url')->unique();
            $table->string('description', 255)->nullable();
            $table->float('price', 10, 2)->nullable();
            $table->mediumText('image01')->nullable();
            $table->mediumText('image02')->nullable();
            $table->mediumText('image03')->nullable();
            $table->boolean('status')->default(true);
            $table->timestamps();
        });
    }


    public function down()
    {
        Schema::dropIfExists('products');
    }
}
