<?php

use Illuminate\Database\Seeder;

class TimmingTypeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            ['name' => 'ฝีกงานด้านบัญขี'],
            ['name' => 'ฝึกงานด้านการบริการ'],
            ['name' => 'ฝึกงานด้านการขาย'],
        ];
        \App\TimingType::insert($data);
    }
}
