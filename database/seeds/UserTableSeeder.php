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
        'password' => bcrypt('admin@6812'),
		'image'=>'1586105114avatar1.png',		// password
        'remember_token' => Str::random(10),
        ]);
    }
}

//$2y$10$6xTpQ0ji.UQl9nMM9s6qVu2mW7/jJZo1KFC33Sr1P5Tjfm5o7TI7e