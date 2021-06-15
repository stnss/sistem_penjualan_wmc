<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = [
            'Super-Admin' => [
                'name' => 'Super User WMC',
                'email' => 'su@wmc.com',
                'phone' => '080000000000',
                'password' => bcrypt('123456'),
                'email_verified_at' => now(),
            ],
            'Administrator' => [
                'name' => 'Administrator WMC',
                'email' => 'admin@wmc.com',
                'phone' => '080000000001',
                'password' => bcrypt('123456'),
                'email_verified_at' => now(),
            ],
            'Owner' => [
                'name' => 'Bang Maman',
                'email' => 'maman@wmc.com',
                'phone' => '080000000002',
                'password' => bcrypt('123456'),
                'email_verified_at' => now(),
            ],
        ];

        foreach($users as $role => $user) {
            User::create($user)->assignRole($role);
        }
    }
}
