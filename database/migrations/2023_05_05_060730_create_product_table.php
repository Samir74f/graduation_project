<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('product', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->longText('description')->nullable();
            $table->longText('long_description')->nullable();
            $table->string('image');
            $table->string('price');
            $table->integer('quantity');
            $table->string('discount_price')->nullable();
            $table->integer('brand_id')->unsigned()->default('0');
            $table->foreign('brand_id')->references('id')->on('brands')->nullable()->onDelete('cascade');
            $table->integer('category_id')->unsigned();
            $table->foreign('category_id')->references('id')->on('categories')->nullable()->onDelete('cascade');
            $table->softDeletes();
            $table->string('slug');
            $table->timestamps();
            $table->string('Status')->default('0')->comment('1=hidden,0=visible');
            $table->string('trending')->default('0')->comment('1=trending,0=not_trending');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('product');
    }
};
