<?php

use Illuminate\Database\Seeder;
use \App\UserType;

class UserTypeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $data = [
            ['name' => 'admin'],
            ['name' => 'user'],
        ];

        UserType::insert($data);

    }
}
