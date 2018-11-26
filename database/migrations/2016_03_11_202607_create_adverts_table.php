<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAdvertsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('adverts', function (Blueprint $table) {
            $table->increments('id');
            $table->string('alt');
            $table->string('url');
            $table->string('image_url');
            $table->string('image_path');
            $table->integer('views');
            $table->integer('clicks');
            $table->boolean('active');
            $table->integer('advert_category_id')->unsigned();
            $table->timestamp('viewed_at');
            $table->timestamps();

            $table->foreign('advert_category_id')
                ->references('id')
                ->on('advert_categories')
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('adverts');
    }
}
