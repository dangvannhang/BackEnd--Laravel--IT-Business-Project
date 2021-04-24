<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;


class PhotographerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('photographer')->insert([
            [
                'id_photographer' => 7,
                'nickname' => Str::random(5),
                'studio_address' => 'Da Nang',
                'limitation_time' => '7,8',
                'descript' => Str::random(50)
            ],
            [
                'id_photographer' => 8,
                'nickname' => Str::random(5),
                'studio_address' => 'Sai Gon',
                'limitation_time' => '2,3,4,5,6,7,8',
                'descript' => Str::random(50)
            ],
            [
                'id_photographer' => 9,
                'nickname' => Str::random(5),
                'studio_address' => 'Da Nang',
                'limitation_time' => '7,8',
                'descript' => Str::random(50)
            ],
            [
                'id_photographer' => 10,
                'nickname' => Str::random(5),
                'studio_address' => 'Sai Gon',
                'limitation_time' => '2,3,4,5,6,7,8',
                'descript' => Str::random(50)
            ],
        ]);
    }
}
