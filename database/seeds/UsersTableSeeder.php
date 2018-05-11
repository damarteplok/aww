<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $admin = [

        	'name' => 'admin',
        	'password' => bcrypt('admin'),
        	'email' => 'mie.yaminasin@gmail.com',
        	'admin' => 1,
        	'avatar' => asset('avatars/avatar.png')

        ];


        App\User::create($admin);
    }
}
