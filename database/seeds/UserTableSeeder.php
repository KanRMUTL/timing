<?php

use Illuminate\Database\Seeder;
use \App\User;
class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
                'name' => 'admin',
                'user_type_id' => 1,
                'email' => 'admin@localhost.com',
                'password' => bcrypt('1234'),
        ];

        User::insert($data);
    }
}
