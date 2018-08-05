<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddSoftdeleteProductAdsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('products_ads', function (Blueprint $table) {
            $table->softDeletesTz();	
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
            if (Schema::hasColumn('products_ads', 'deleted_at')) {
                $table->dropColumn('deleted_at');
            } 	
        });
    }
}
