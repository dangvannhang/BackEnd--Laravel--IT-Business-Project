<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            //
            UserSeeder::class,
            //
            RoleSeeder::class,
            //
            VoucherSeeder::class,
            //
            PostSeeder::class,
            // 
            FollowStyleSeeder::class,
            //
            MainStyleSeeder::class,
            //
            ComboSeeder::class,
            // 
            BookingSeeder::class,

            DetailBookingSeeder::class
        ]);
    }
}
