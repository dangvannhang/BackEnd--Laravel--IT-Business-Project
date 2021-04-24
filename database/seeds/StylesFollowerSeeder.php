<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class StylesFollowerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('follow_style')->insert([
            [
                'id_user' => 1,
                'id_style' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id_user' => 1,
                'id_style' => 3,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id_user' => 2,
                'id_style' =>3,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id_user' =>2,
                'id_style' => 6,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id_user' => 3,
                'id_style' => 4,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id_user' => 3,
                'id_style' => 9,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id_user' => 4,
                'id_style' => 10,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id_user' => 5,
                'id_style' => 11,
                'created_at' => now(),
                'updated_at' => now(),
            ],

        ]);
    }
}
