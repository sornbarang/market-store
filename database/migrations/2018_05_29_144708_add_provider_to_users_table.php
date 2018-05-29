<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddProviderToUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (Schema::hasTable('users')) {
            Schema::table('users', function (Blueprint $table) {
                $table->string('provider')->nullable()->default(null)->after('password');
                $table->string('provider_id')->nullable()->default(null)->after('provider');
            });
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        if (Schema::hasTable('users')) {
            if (Schema::hasColumn('provider', 'provider_id')) {
                Schema::table('users', function (Blueprint $table) {
                    $table->dropColumn(['provider', 'provider_id']);
                });
            }
        }
    }
}
