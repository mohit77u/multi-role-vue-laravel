<?php

use App\User;
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
        $admin = User::create([
            'name' => 'Mohit',
            'email' => 'mohiit77u@gmail.com',
            'password' => bcrypt('mohit77u@9'),
        ]);
        
    }
}
