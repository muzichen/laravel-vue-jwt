<?php

use App\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        
        $user = [
        	'name' => 'Chen Lee',
        	'email' => 'sdlichen@gmail.com',
        	'password' => Hash::make(123456)
        ];
        User::create($user);
    }
}
