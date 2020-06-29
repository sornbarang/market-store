<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddFieldToProductAds extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('products_ads_translations', function (Blueprint $table) {
            if (!Schema::hasColumn('products_ads_translations', 'short_description')) {
                $table->text('short_description')->nullable();
            }
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('products_ads_translations', function (Blueprint $table) {
            if (Schema::hasColumn('products_ads_translations', 'short_description')) {
                $table->dropColumn('short_description');
            }
        });
    }
}
