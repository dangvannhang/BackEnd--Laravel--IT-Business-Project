<?php

use Illuminate\Database\Seeder;

class DetailBookingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

        DB::table('detail_booking')->insert([
            [
                'id_booking' => 1,
                'address' => 'Da Nang',
                'start_time' => '2021-04-20 07:00:00',
                'end_time' => '2021-04-20 09:00:00',
                'price' => 300000
            ],
            [
                'id_booking' => 2,
                'address' => 'Da Nang',
                'start_time' => '2021-04-20 07:00:00',
                'end_time' => '2021-04-20 07:00:00',
                'price' => 300000
            ],
            [
                'id_booking' => 3,
                'address' => 'Da Nang',
                'start_time' => '2021-04-20 07:00:00',
                'end_time' => '2021-04-20 07:00:00',
                'price' => 300000
            ],
            [
                'id_booking' => 4,
                'address' => 'Da Nang',
                'start_time' => '2021-04-20 07:00:00',
                'end_time' => '2021-04-20 07:00:00',
                'price' => 300000
            ],
            [
                'id_booking' => 5,
                'address' => 'Da Nang',
                'start_time' => '2021-04-20 07:00:00',
                'end_time' => '2021-04-20 07:00:00',
                'price' => 300000
            ],
            [
                'id_booking' => 6,
                'address' => 'Da Nang',
                'start_time' => '2021-04-20 07:00:00',
                'end_time' => '2021-04-20 07:00:00',
                'price' => 300000
            ],
            [
                'id_booking' => 7,
                'address' => 'Da Nang',
                'start_time' => '2021-04-20 07:00:00',
                'end_time' => '2021-04-20 07:00:00',
                'price' => 300000
            ],
            [
                'id_booking' => 8,
                'address' => 'Da Nang',
                'start_time' => '2021-04-20 07:00:00',
                'end_time' => '2021-04-20 07:00:00',
                'price' => 300000
            ],
            [
                'id_booking' => 9,
                'address' => 'Da Nang',
                'start_time' => '2021-04-20 07:00:00',
                'end_time' => '2021-04-20 07:00:00',
                'price' => 300000
            ],

        ]);
    }
}
