<?php

use Illuminate\Database\Seeder;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\User::create([
            'name' => 'Your name',
            'username' => 'nickname',
            'role' => 'admin',
            'password' => bcrypt('password'),
            'email' => 'admin@admin.com',
            'status' => 'active',
        ]);
    }
}
