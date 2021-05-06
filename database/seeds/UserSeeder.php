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
                'username' => 'user6',
                'password' => Hash::make('password'),
               
                'email'    => 'user6@gmail.com',
                'avatar' => '../assets/Images/NAG/1.png'
            ],
            [
                'username' => 'user7',
                'password' => Hash::make('password'),
               
                'email'    => 'user7@gmail.com',
                'avatar' => '../assets/Images/NAG/1.png'
            ],
            [
                'username' => 'user8',
                'password' => Hash::make('password'),
               
                'email'    => 'user8@gmail.com',
                'avatar' => '../assets/Images/NAG/1.png'
            ],
            [
                'username' => 'user9',
                'password' => Hash::make('password'),
               
                'email'    => 'user9@gmail.com',
                'avatar' => '../assets/Images/NAG/1.png'
            ],
            [
                'username' => 'user10',
                'password' => Hash::make('password'),
               
                'email'    => 'user10@gmail.com',
                'avatar' => '../assets/Images/NAG/1.png'
            ],
            [
                'username' => 'user11',
                'password' => Hash::make('password'),
               
                'email'    => 'user11@gmail.com',
                'avatar' => '../assets/Images/NAG/1.png'
            ],
            [
                'username' => 'user12',
                'password' => Hash::make('password'),
               
                'email'    => 'user12@gmail.com',
                'avatar' => '../assets/Images/NAG/1.png'
            ],
            [
                'username' => 'user13',
                'password' => Hash::make('password'),
               
                'email'    => 'user13@gmail.com',
                'avatar' => '../assets/Images/NAG/1.png'
            ],
            [
                'username' => 'user14',
                'password' => Hash::make('password'),
               
                'email'    => 'user14@gmail.com',
                'avatar' => '../assets/Images/NAG/1.png'
            ],
            [
                'username' => 'user15',
                'password' => Hash::make('password'),
               
                'email'    => 'user15@gmail.com',
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
            ],


            [
                'username' => 'photographer5',
                'password' => Hash::make('password'),
               
                'email'    => 'photographer5@gmail.com',
                'avatar' => '../assets/Images/NAG/1.png'
            ],
            [
                'username' => 'photographer6',
                'password' => Hash::make('password'),
               
                'email'    => 'photographer6@gmail.com',
                'avatar' => '../assets/Images/NAG/1.png'
            ],
            [
                'username' => 'photographer7',
                'password' => Hash::make('password'),
               
                'email'    => 'photographer7@gmail.com',
                'avatar' => '../assets/Images/NAG/1.png'
            ],
            [
                'username' => 'photographer8',
                'password' => Hash::make('password'),
               
                'email'    => 'photographer8@gmail.com',
                'avatar' => '../assets/Images/NAG/1.png'
            ],
            [
                'username' => 'photographer9',
                'password' => Hash::make('password'),
               
                'email'    => 'photographer9@gmail.com',
                'avatar' => '../assets/Images/NAG/1.png'
            ],

            
            [
                'username' => 'photographer10',
                'password' => Hash::make('password'),
               
                'email'    => 'photographer10@gmail.com',
                'avatar' => '../assets/Images/NAG/1.png'
            ],
            [
                'username' => 'photographer11',
                'password' => Hash::make('password'),
               
                'email'    => 'photographer11@gmail.com',
                'avatar' => '../assets/Images/NAG/1.png'
            ],
            [
                'username' => 'photographer12',
                'password' => Hash::make('password'),
               
                'email'    => 'photographer12@gmail.com',
                'avatar' => '../assets/Images/NAG/1.png'
            ],
            [
                'username' => 'photographer13',
                'password' => Hash::make('password'),
               
                'email'    => 'photographer13@gmail.com',
                'avatar' => '../assets/Images/NAG/1.png'
            ],
            [
                'username' => 'photographer14',
                'password' => Hash::make('password'),
               
                'email'    => 'photographer14@gmail.com',
                'avatar' => '../assets/Images/NAG/1.png'
            ],
            [
                'username' => 'photographer15',
                'password' => Hash::make('password'),
               
                'email'    => 'photographer15@gmail.com',
                'avatar' => '../assets/Images/NAG/1.png'
            ],

        ]);
    }
}
