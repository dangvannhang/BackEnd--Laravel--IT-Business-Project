<?php

use Illuminate\Database\Seeder;

class FollowStyleSeeder extends Seeder
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
                'id_user' =>,
                'follow_style' =>
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id_user' =>,
                'follow_style' =>
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id_user' =>,
                'follow_style' =>
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id_user' =>,
                'follow_style' =>
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id_user' =>,
                'follow_style' =>
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
