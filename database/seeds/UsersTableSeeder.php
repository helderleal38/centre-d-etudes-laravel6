<?php

use App\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin = User::create([
            "firstname" => "Vasco" ,
            "name" => "Soares" ,
            "email" => "Vasco@gmail.com" ,
            "password" => Hash::make("password"),
            "state" => "administrateur",
        ]);
    }
}
