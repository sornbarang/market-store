<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ChangeDatatype01ProductAdsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('products_ads', function (Blueprint $table) {
            if (Schema::hasColumn('products_ads', 'active')) {
                $table->smallInteger('active')->tinyInteger('active')->change()->default(1);
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
        Schema::table('products_ads', function (Blueprint $table) {
            if (Schema::hasColumn('products_ads', 'active')) {
                $table->dropColumn('active');
            }
        });
    }
}
