<?php

use Illuminate\Database\Seeder;
use \App\User;

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
        $user->name = "Somchai Madee";
        $user->user_type_id = 1;
        $user->email = "admin@gmail.com";
        $user->password = bcrypt('1234');
        $user->save();
    }
}
