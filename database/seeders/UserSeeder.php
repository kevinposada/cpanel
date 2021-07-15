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
        User::create([
            'name' => 'admin',
            'email' => 'admin@gmail.com',
            'username' => 'admin',
            'password' => bcrypt('admin123')
        ])->assignRole('admin');

        User::create([
            'name' => 'client',
            'email' => 'client@gmail.com',
            'username' => 'client',
            'password' => bcrypt('admin123')
        ])->assignRole('client');

        User::create([
            'name' => 'creator',
            'email' => 'creator@gmail.com',
            'username' => 'creator',
            'password' => bcrypt('admin123')
        ])->assignRole('creator');

        User::factory(7)->create();
    }
}
