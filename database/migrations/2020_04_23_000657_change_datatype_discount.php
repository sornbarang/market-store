<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ChangeDatatypeDiscount extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('products_ads', function (Blueprint $table) {
            if (Schema::hasColumn('products_ads', 'discount')) {
                $table->float('discount', 8, 2)->change();
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
            if (Schema::hasColumn('products_ads', 'discount')) {
                $table->float('discount', 8, 2)->change();
            }
        });
    }
}
