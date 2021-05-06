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
                'id_photographer' => 17,
                'nickname' => Str::random(5),
                'studio_address' => 'Da Nang',
                'limitation_time' => '7,8',
                'descript' => Str::random(50)
            ],
            [
                'id_photographer' => 18,
                'nickname' => Str::random(5),
                'studio_address' => 'Sai Gon',
                'limitation_time' => '2,3,4,5,6,7,8',
                'descript' => Str::random(50)
            ],
            [
                'id_photographer' => 19,
                'nickname' => Str::random(5),
                'studio_address' => 'Da Nang',
                'limitation_time' => '7,8',
                'descript' => Str::random(50)
            ],
            [
                'id_photographer' => 20,
                'nickname' => Str::random(5),
                'studio_address' => 'Sai Gon',
                'limitation_time' => '2,3,4,5,6,7,8',
                'descript' => Str::random(50)
            ],
            [
                'id_photographer' => 21,
                'nickname' => Str::random(5),
                'studio_address' => 'Sai Gon',
                'limitation_time' => '2,3,4,5,6,7,8',
                'descript' => Str::random(50)
            ],
            [
                'id_photographer' => 22,
                'nickname' => Str::random(5),
                'studio_address' => 'Sai Gon',
                'limitation_time' => '2,3,4,5,6,7,8',
                'descript' => Str::random(50)
            ],
            [
                'id_photographer' => 23,
                'nickname' => Str::random(5),
                'studio_address' => 'Sai Gon',
                'limitation_time' => '2,3,4,5,6,7,8',
                'descript' => Str::random(50)
            ],
            [
                'id_photographer' => 24,
                'nickname' => Str::random(5),
                'studio_address' => 'Sai Gon',
                'limitation_time' => '2,3,4,5,6,7,8',
                'descript' => Str::random(50)
            ],
            [
                'id_photographer' => 25,
                'nickname' => Str::random(5),
                'studio_address' => 'Sai Gon',
                'limitation_time' => '2,3,4,5,6,7,8',
                'descript' => Str::random(50)
            ],
            [
                'id_photographer' => 26,
                'nickname' => Str::random(5),
                'studio_address' => 'Sai Gon',
                'limitation_time' => '2,3,4,5,6,7,8',
                'descript' => Str::random(50)
            ],
            [
                'id_photographer' => 27,
                'nickname' => Str::random(5),
                'studio_address' => 'Sai Gon',
                'limitation_time' => '2,3,4,5,6,7,8',
                'descript' => Str::random(50)
            ],

                        [
                'id_photographer' => 28,
                'nickname' => Str::random(5),
                'studio_address' => 'Sai Gon',
                'limitation_time' => '2,3,4,5,6,7,8',
                'descript' => Str::random(50)
            ],
            [
                'id_photographer' => 29,
                'nickname' => Str::random(5),
                'studio_address' => 'Sai Gon',
                'limitation_time' => '2,3,4,5,6,7,8',
                'descript' => Str::random(50)
            ],
            [
                'id_photographer' => 30,
                'nickname' => Str::random(5),
                'studio_address' => 'Sai Gon',
                'limitation_time' => '2,3,4,5,6,7,8',
                'descript' => Str::random(50)
            ],
            [
                'id_photographer' => 31,
                'nickname' => Str::random(5),
                'studio_address' => 'Sai Gon',
                'limitation_time' => '2,3,4,5,6,7,8',
                'descript' => Str::random(50)
            ]
        ]);
    }
}
