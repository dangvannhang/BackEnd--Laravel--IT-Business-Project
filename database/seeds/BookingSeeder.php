<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class BookingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('booking')->insert([
            [
                'id_customer' => 2,
                'id_photographer' => 7,
                'id_combo' => 1,
                'is_cancel' => false,
                'id_voucher' => 1,
                'start_time' => '2021-04-20 08:00:00',
                'end_time' => '2021-04-20 12:00:00',
                'price' => 300000,
                'booking_status' => 2,
                'is_finish' => true,
                'created_at' => '2021-04-16 15:00:00',
                'updated_at' => '2021-04-16 15:00:00',
            ],
            [
                'id_customer' => 5 ,
                'id_photographer' => 9,
                'id_combo' => 5,
                'is_cancel' => false,
                'id_voucher' => 2,
                'start_time' => '2021-04-25 15:00:00',
                'end_time' => '2021-04-25 17:30:00',
                'price' => 500000,
                'booking_status' => 2,
                'is_finish' => false,

                'created_at' => '2021-04-25 05:00:00',
                'updated_at' => '2021-04-25 05:00:00',
            ],
            [
                'id_customer' => 6,
                'id_photographer' => 8,
                'id_combo' => 3,
                'is_cancel' => false,
                'id_voucher' => 2,
                'start_time' => '2021-04-26 05:00:00',
                'end_time' => '2021-04-26 07:00:00',
                'price' => 450000,
                'booking_status' => 1,
                'is_finish' => false,

                'created_at' => '2021-04-25 05:00:00',
                'updated_at' => '2021-04-25 05:00:00'
            ],
        ]);
    }
}
