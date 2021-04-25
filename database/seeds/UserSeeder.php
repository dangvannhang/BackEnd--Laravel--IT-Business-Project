<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;


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
                'email'    => 'piccine@gmail.com',
                'avatar' => '../assets/Images/NAG/1.png'
            ],
            [
                'username' => 'user1',
                'password' => Hash::make('password'),
                'email'    => 'user1@gmail.com',
                'avatar' => '../assets/Images/NAG/1.png'
            ],

            [
                'username' => 'user2',
                'password' => Hash::make('password'),
                
                'email'    => 'user2@gmail.com',
                'avatar' => '../assets/Images/NAG/1.png'
            ],
            [
                'username' => 'user3',
                'password' => Hash::make('password'),
               
                'email'    => 'user3@gmail.com',
                'avatar' => '../assets/Images/NAG/1.png'
            ],
            [
                'username' => 'user4',
                'password' => Hash::make('password'),
               
                'email'    => 'user4@gmail.com',
                'avatar' => '../assets/Images/NAG/1.png'
            ],
            [
                'username' => 'user5',
                'password' => Hash::make('password'),
               
                'email'    => 'user5@gmail.com',
                'avatar' => '../assets/Images/NAG/1.png'
            ],
            [
                'username' => 'photographer1',
                'password' => Hash::make('password'),
               
                'email'    => 'photographer1@gmail.com',
                'avatar' => '../assets/Images/NAG/1.png'
            ],
            [
                'username' => 'photographer2',
                'password' => Hash::make('password'),
               
                'email'    => 'photographer2@gmail.com',
                'avatar' => '../assets/Images/NAG/1.png'
            ],
            [
                'username' => 'photographer3',
                'password' => Hash::make('password'),
                
                'email'    => 'photographer3@gmail.com',
                'avatar' => '../assets/Images/NAG/1.png'
            ],
            [
                'username' => 'photographer4',
                'password' => Hash::make('password'),
               
                'email'    => 'photographer4@gmail.com',
                'avatar' => '../assets/Images/NAG/1.png'
            ]

        ]);
    }
}
