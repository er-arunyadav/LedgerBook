<?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       App\User::create([
        'name' => 'Arun Yadav',
        'email' => 'admin@admin.com',
        'email_verified_at' => now(),
        'password' => bcrypt('admin@6812'), // password
        'remember_token' => Str::random(10),
        ]);
    }
}
