<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class UserRoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

        DB::table('user_role')->insert([
            [
                'id_user' => 1,
                'id_role' => 1,
                
            ],
            [
                'id_user' => 2,
                'id_role' => 2,
                
            ],
            [
                'id_user' => 3,
                'id_role' => 2,
                
            ],
            [
                'id_user' => 4,
                'id_role' => 2,
                
            ],
            [
                'id_user' => 5,
                'id_role' => 2,
                
            ],
            [
                'id_user' => 6,
                'id_role' => 2,
                
            ],
            [
                'id_user' => 7,
                'id_role' => 3,
                
            ],
            [
                'id_user' => 8,
                'id_role' => 3,
                
            ],
            [
                'id_user' => 9,
                'id_role' => 3,
                
            ],
            [
                'id_user' => 10,
                'id_role' => 3,
                
            ],

        ]);

    }
}
