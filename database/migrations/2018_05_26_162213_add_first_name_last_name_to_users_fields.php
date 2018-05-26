<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddFirstNameLastNameToUsersFields extends Migration
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
                if (!Schema::hasColumn('slug', 'first_name','last_name','deleted_at')) {
                    $table->dropColumn(['address','phone']);
                    $table->string('slug')->after('name');
                    $table->string('first_name')->after('slug')->nullable();
                    $table->string('last_name')->after('first_name')->nullable();
                    $table->softDeletes()->after('updated_at');
                }
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
            if (Schema::hasColumn('slug', 'first_name','last_name','deleted_at')) {
                Schema::table('users', function (Blueprint $table) {
                    $table->dropColumn(['slug', 'first_name', 'last_name', 'deleted_at']);
                });
            }
        }
    }
}
