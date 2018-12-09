<?php

use Illuminate\Database\Seeder;
use \App\TimingType;

class TimingTypeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
           [ 'name' => 'ฝึกงานด้านการขาย'],
            ['name' => 'ฝึกงานด้านบริการ'],
            ['name' => 'ฝึกงานด้านบัญชี']
        ];

        TimingType::insert($data);
    }
}
