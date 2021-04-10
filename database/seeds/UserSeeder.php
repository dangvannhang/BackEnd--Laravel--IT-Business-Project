<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;


class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('user')->insert([
            [
                'username' => 'piccine',
                'password' => Hash::make('password'),
                'id_role'  => 1,
                'phone'    => '0123456789',
                'email'    => 'piccine@gmail.com'
            ],
            [
                'username' => 'user1',
                'password' => Hash::make('password'),
                'id_role'  => 2,
                'phone'    => '0123456788',
                'email'    => 'user1@gmail.com'
            ],

            [
                'username' => 'user2',
                'password' => Hash::make('password'),
                'id_role'  => 2,
                'phone'    => '0123456787',
                'email'    => 'user2@gmail.com'
            ],
            [
                'username' => 'user3',
                'password' => Hash::make('password'),
                'id_role'  => 2,
                'phone'    => '0123456786',
                'email'    => 'user3@gmail.com'
            ],
            [
                'username' => 'user4',
                'password' => Hash::make('password'),
                'id_role'  => 2,
                'phone'    => '0123456785',
                'email'    => 'user4@gmail.com'
            ],
            [
                'username' => 'user5',
                'password' => Hash::make('password'),
                'id_role'  => 2,
                'phone'    => '0123456784',
                'email'    => 'user5@gmail.com'
            ],
            [
                'username' => 'photographer1',
                'password' => Hash::make('password'),
                'id_role'  => 3,
                'phone'    => '0123456701',
                'email'    => 'photographer1@gmail.com'
            ],
            [
                'username' => 'photographer2',
                'password' => Hash::make('password'),
                'id_role'  => 3,
                'phone'    => '0123456702',
                'email'    => 'photographer2@gmail.com'
            ],
            [
                'username' => 'photographer3',
                'password' => Hash::make('password'),
                'id_role'  => 3,
                'phone'    => '0123456703',
                'email'    => 'photographer3@gmail.com'
            ],
            [
                'username' => 'photographer4',
                'password' => Hash::make('password'),
                'id_role'  => 3,
                'phone'    => '0123456704',
                'email'    => 'photographer4@gmail.com'
            ]

        ]);
    }
}
