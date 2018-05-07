<?php

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class RoleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $roles = [
            'Admin',
            'Supplier',
            'Customer',
            'User',
            'Guest'
        ];

        foreach ($roles as $role) {
            Role::create(['name' => $role]);
        }
    }
}
