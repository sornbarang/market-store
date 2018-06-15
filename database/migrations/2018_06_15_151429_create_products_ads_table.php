<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductsAdsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products_ads', function (Blueprint $table) {
            $table->increments('id');
            $table->decimal('price', 13, 2)->nullable()->default(null);
            $table->decimal('discount', 3, 2)->nullable()->default(null);
            $table->tinyInteger('active')->default('0');
            $table->timestamps();
        });

        Schema::create('products_ads_translations', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('products_ads_id')->unsigned();
            $table->string('locale')->index();
            $table->string('name', 255)->nullable()->default(null);
            $table->longText('description')->nullable()->default(null);
            $table->string('slug');
            $table->unique(['products_ads_id','locale']);
            $table->foreign('products_ads_id')->references('id')->on('products_ads')->onDelete('cascade');
        });
    }


    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('products_ads');
        Schema::dropIfExists('products_ads_translations');
    }
}
