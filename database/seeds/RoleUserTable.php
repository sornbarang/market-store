<?php

use Illuminate\Database\Seeder;

class RoleUserTable extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('role_users')->insert([
            'role_id' => 1,
            'user_id' => 1
        ]);
        DB::table('role_users')->insert([
            'role_id' => 2,
            'user_id' => 2
        ]);
    }
}
