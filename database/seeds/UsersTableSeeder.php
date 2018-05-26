<?php

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Profile;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = new User();
        $user->name = 'admin_user';
        $user->first_name = 'user';
        $user->last_name = 'admin';
        $user->email = 'admin@treewb.com';
        $user->password = bcrypt('secret123admin');
        $user->save();

        $user->profile()->create([
            'phone' => '087333444',
            'location' => 'Phnom Penh',
        ]);

        $user->assignRole('super-admin');
    }
}
