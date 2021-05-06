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
        // booking_status: 
        // 1 -> customer waiting photographer
        // 2 -> photographer accepted
        // 3 -> customer cancel
        // 4 -> photographer cancel


        DB::table('booking')->insert([

            [
                'id_customer' => 2,
                'id_photographer' => 17,
                'id_combo' => 3,
                'id_voucher' => 1,
                'start_time' => '2021-03-07 08:00:00',
                'end_time' => '2021-03-07 12:00:00',
                'price' => 1300000,
                'booking_status' => 2,
                'is_finish' => true,
                'booking_address' => 'Shop quần áo số 34 Nam Từ Liêm, Hà Nội',
                'created_at' => '2021-03-05 15:22:00',
                'updated_at' => '2021-03-05 15:22:00',
            ],
            [
                'id_customer' => 5 ,
                'id_photographer' => 19,
                'id_combo' => 12,
                'id_voucher' => 2,
                'start_time' => '2021-03-08 06:30:00',
                'end_time' => '2021-03-08 09:30:00',
                'price' => 500000,
                'booking_status' => 2,
                'is_finish' => true,
                'booking_address' => '',
                'created_at' => '2021-03-05 19:00:00',
                'updated_at' => '2021-03-05 19:00:00',
            ],
            [
                'id_customer' => 6,
                'id_photographer' => 18,
                'id_combo' => 10,
                'id_voucher' => 2,
                'start_time' => '2021-03-11 20:00:00',
                'end_time' => '2021-03-11 22:00:00',
                'price' => 450000,
                'booking_status' => 2,
                'is_finish' => true,
                'booking_address' => 'Cong Vien Gia Dinh, Go Vap',
                'created_at' => '2021-03-07 05:00:00',
                'updated_at' => '2021-03-07 05:00:00'
            ],
            [
                'id_customer' => 4,
                'id_photographer' => 22,
                'id_combo' => 27,
                'id_voucher' => 2,
                'start_time' => '2021-03-11 06:00:00',
                'end_time' => '2021-03-11 08:00:00',
                'price' => 450000,
                'booking_status' => 2,
                'is_finish' => true,
                'booking_address' => '',
                'created_at' => '2021-03-07 11:00:00',
                'updated_at' => '2021-03-07 11:00:00'
            ],
            [
                'id_customer' => 7,
                'id_photographer' => 18,
                'id_combo' => 6,
                'id_voucher' => 2,
                'start_time' => '2021-03-10 15:00:00',
                'end_time' => '2021-03-10 17:00:00',
                'price' => 450000,
                'booking_status' => 3,
                'is_finish' => false,
                'booking_address' => '',
                'created_at' => '2021-03-08 09:00:00',
                'updated_at' => '2021-03-08 09:00:00'
            ],
            [
                'id_customer' => 9,
                'id_photographer' => 28,
                'id_combo' => 59,
                'id_voucher' => 2,
                'start_time' => '2021-03-15 05:00:00',
                'end_time' => '2021-03-15 07:00:00',
                'price' => 5000000,
                'booking_status' => 2,
                'is_finish' => true,
                'booking_address' => '35 Duy Tan, Son Tra, DN',
                'created_at' => '2021-03-10 11:00:00',
                'updated_at' => '2021-03-10 11:00:00'
            ],
            [
                'id_customer' => 8,
                'id_photographer' => 31,
                'id_combo' => 75,
                'id_voucher' => 2,
                'start_time' => '2021-03-13 18:00:00',
                'end_time' => '2021-03-13 20:00:00',
                'price' => 450000,
                'booking_status' => 2,
                'is_finish' => true,
                'booking_address' => 'Saigon Centre quận 1,  HCM',
                'created_at' => '2021-03-10 11:30:00',
                'updated_at' => '2021-03-10 11:30:00'
            ],
            [
                'id_customer' => 10,
                'id_photographer' => 30,
                'id_combo' => 66,
                'id_voucher' => 2,
                'start_time' => '2021-03-15 06:00:00',
                'end_time' => '2021-03-15 08:00:00',
                'price' => 450000,
                'booking_status' => 1,
                'is_finish' => false,
                'booking_address' => '',

                'created_at' => '2021-03-12 11:23:10',
                'updated_at' => '2021-03-12 11:23:10'
            ],
            [
                'id_customer' => 16,
                'id_photographer' => 29,
                'id_combo' => 3,
                'is_cancel' => false,
                'id_voucher' => 2,
                'start_time' => '2021-04-26 05:00:00',
                'end_time' => '2021-04-26 07:00:00',
                'price' => 450000,
                'booking_status' => 1,
                'is_finish' => false,
                'booking_address' => '',

                'created_at' => '2021-04-25 05:00:00',
                'updated_at' => '2021-04-25 05:00:00'
            ],
            [
                'id_customer' => 17,
                'id_photographer' => 27,
                'id_combo' => 3,
                'is_cancel' => false,
                'id_voucher' => 2,
                'start_time' => '2021-04-26 05:00:00',
                'end_time' => '2021-04-26 07:00:00',
                'price' => 450000,
                'booking_status' => 1,
                'is_finish' => false,
                'booking_address' => '',

                'created_at' => '2021-04-25 05:00:00',
                'updated_at' => '2021-04-25 05:00:00'
            ],

            [
                'id_customer' => 15,
                'id_photographer' => 23,
                'id_combo' => 3,
                'is_cancel' => false,
                'id_voucher' => 2,
                'start_time' => '2021-04-26 05:00:00',
                'end_time' => '2021-04-26 07:00:00',
                'price' => 450000,
                'booking_status' => 1,
                'is_finish' => false,
                'booking_address' => '',

                'created_at' => '2021-04-25 05:00:00',
                'updated_at' => '2021-04-25 05:00:00'
            ],
            [
                'id_customer' => 14,
                'id_photographer' => 22,
                'id_combo' => 3,
                'is_cancel' => false,
                'id_voucher' => 2,
                'start_time' => '2021-04-26 05:00:00',
                'end_time' => '2021-04-26 07:00:00',
                'price' => 450000,
                'booking_status' => 1,
                'is_finish' => false,
                'booking_address' => '',

                'created_at' => '2021-04-25 05:00:00',
                'updated_at' => '2021-04-25 05:00:00'
            ],
            [
                'id_customer' => 13,
                'id_photographer' => 18,
                'id_combo' => 3,
                'is_cancel' => false,
                'id_voucher' => 2,
                'start_time' => '2021-04-26 05:00:00',
                'end_time' => '2021-04-26 07:00:00',
                'price' => 450000,
                'booking_status' => 1,
                'is_finish' => false,
                'booking_address' => '',

                'created_at' => '2021-04-25 05:00:00',
                'updated_at' => '2021-04-25 05:00:00'
            ],
            [
                'id_customer' => 12,
                'id_photographer' => 21,
                'id_combo' => 3,
                'is_cancel' => false,
                'id_voucher' => 2,
                'start_time' => '2021-04-26 05:00:00',
                'end_time' => '2021-04-26 07:00:00',
                'price' => 450000,
                'booking_status' => 1,
                'is_finish' => false,
                'booking_address' => '',

                'created_at' => '2021-04-25 05:00:00',
                'updated_at' => '2021-04-25 05:00:00'
            ],
            [
                'id_customer' => 11,
                'id_photographer' => 23,
                'id_combo' => 3,
                'is_cancel' => false,
                'id_voucher' => 2,
                'start_time' => '2021-04-26 05:00:00',
                'end_time' => '2021-04-26 07:00:00',
                'price' => 450000,
                'booking_status' => 1,
                'is_finish' => false,
                'booking_address' => '',

                'created_at' => '2021-04-25 05:00:00',
                'updated_at' => '2021-04-25 05:00:00'
            ],
            [
                'id_customer' => 6,
                'id_photographer' => 25,
                'id_combo' => 3,
                'is_cancel' => false,
                'id_voucher' => 2,
                'start_time' => '2021-04-26 05:00:00',
                'end_time' => '2021-04-26 07:00:00',
                'price' => 450000,
                'booking_status' => 1,
                'is_finish' => false,
                'booking_address' => '',

                'created_at' => '2021-04-25 05:00:00',
                'updated_at' => '2021-04-25 05:00:00'
            ],

            [
                'id_customer' => 4,
                'id_photographer' => 26,
                'id_combo' => 3,
                'is_cancel' => false,
                'id_voucher' => 2,
                'start_time' => '2021-04-26 05:00:00',
                'end_time' => '2021-04-26 07:00:00',
                'price' => 450000,
                'booking_status' => 1,
                'is_finish' => false,
                'booking_address' => '',

                'created_at' => '2021-04-25 05:00:00',
                'updated_at' => '2021-04-25 05:00:00'
            ],
             [
                'id_customer' => 7,
                'id_photographer' => 27,
                'id_combo' => 3,
                'is_cancel' => false,
                'id_voucher' => 2,
                'start_time' => '2021-04-26 05:00:00',
                'end_time' => '2021-04-26 07:00:00',
                'price' => 450000,
                'booking_status' => 1,
                'is_finish' => false,
                'booking_address' => '',

                'created_at' => '2021-04-25 05:00:00',
                'updated_at' => '2021-04-25 05:00:00'
            ],
            [
                'id_customer' => 5,
                'id_photographer' => 28,
                'id_combo' => 3,
                'is_cancel' => false,
                'id_voucher' => 2,
                'start_time' => '2021-04-26 05:00:00',
                'end_time' => '2021-04-26 07:00:00',
                'price' => 450000,
                'booking_status' => 1,
                'is_finish' => false,
                'booking_address' => '',

                'created_at' => '2021-04-25 05:00:00',
                'updated_at' => '2021-04-25 05:00:00'
            ],
            [
                'id_customer' => 3,
                'id_photographer' => 29,
                'id_combo' => 3,
                'is_cancel' => false,
                'id_voucher' => 2,
                'start_time' => '2021-04-26 05:00:00',
                'end_time' => '2021-04-26 07:00:00',
                'price' => 450000,
                'booking_status' => 1,
                'is_finish' => false,
                'booking_address' => '',

                'created_at' => '2021-04-25 05:00:00',
                'updated_at' => '2021-04-25 05:00:00'
            ],
            [
                'id_customer' => 9,
                'id_photographer' => 30,
                'id_combo' => 3,
                'is_cancel' => false,
                'id_voucher' => 2,
                'start_time' => '2021-04-26 05:00:00',
                'end_time' => '2021-04-26 07:00:00',
                'price' => 450000,
                'booking_status' => 1,
                'is_finish' => false,
                'booking_address' => '',

                'created_at' => '2021-04-25 05:00:00',
                'updated_at' => '2021-04-25 05:00:00'
            ],
            [
                'id_customer' => 11,
                'id_photographer' => 22,
                'id_combo' => 3,
                'is_cancel' => false,
                'id_voucher' => 2,
                'start_time' => '2021-04-26 05:00:00',
                'end_time' => '2021-04-26 07:00:00',
                'price' => 450000,
                'booking_status' => 1,
                'is_finish' => false,
                'booking_address' => '',

                'created_at' => '2021-04-25 05:00:00',
                'updated_at' => '2021-04-25 05:00:00'
            ],
            [
                'id_customer' => 17,
                'id_photographer' => 17,
                'id_combo' => 3,
                'is_cancel' => false,
                'id_voucher' => 2,
                'start_time' => '2021-04-26 05:00:00',
                'end_time' => '2021-04-26 07:00:00',
                'price' => 450000,
                'booking_status' => 1,
                'is_finish' => false,
                'booking_address' => '',

                'created_at' => '2021-04-25 05:00:00',
                'updated_at' => '2021-04-25 05:00:00'
            ],

            [
                'id_customer' => 16,
                'id_photographer' => 25,
                'id_combo' => 3,
                'is_cancel' => false,
                'id_voucher' => 2,
                'start_time' => '2021-04-26 05:00:00',
                'end_time' => '2021-04-26 07:00:00',
                'price' => 450000,
                'booking_status' => 1,
                'is_finish' => false,
                'booking_address' => '',

                'created_at' => '2021-04-25 05:00:00',
                'updated_at' => '2021-04-25 05:00:00'
            ],
            [
                'id_customer' => 13,
                'id_photographer' => 27,
                'id_combo' => 3,
                'is_cancel' => false,
                'id_voucher' => 2,
                'start_time' => '2021-04-26 05:00:00',
                'end_time' => '2021-04-26 07:00:00',
                'price' => 450000,
                'booking_status' => 1,
                'is_finish' => false,
                'booking_address' => '',

                'created_at' => '2021-04-25 05:00:00',
                'updated_at' => '2021-04-25 05:00:00'
            ],
            [
                'id_customer' => 13,
                'id_photographer' => 30,
                'id_combo' => 3,
                'is_cancel' => false,
                'id_voucher' => 2,
                'start_time' => '2021-04-26 05:00:00',
                'end_time' => '2021-04-26 07:00:00',
                'price' => 450000,
                'booking_status' => 1,
                'is_finish' => false,
                'booking_address' => '',

                'created_at' => '2021-04-25 05:00:00',
                'updated_at' => '2021-04-25 05:00:00'
            ], [
                'id_customer' => 12,
                'id_photographer' => 29,
                'id_combo' => 3,
                'is_cancel' => false,
                'id_voucher' => 2,
                'start_time' => '2021-04-26 05:00:00',
                'end_time' => '2021-04-26 07:00:00',
                'price' => 450000,
                'booking_status' => 1,
                'is_finish' => false,
                'booking_address' => '',

                'created_at' => '2021-04-25 05:00:00',
                'updated_at' => '2021-04-25 05:00:00'
            ],
            [
                'id_customer' => 11,
                'id_photographer' => 28,
                'id_combo' => 3,
                'is_cancel' => false,
                'id_voucher' => 2,
                'start_time' => '2021-04-26 05:00:00',
                'end_time' => '2021-04-26 07:00:00',
                'price' => 450000,
                'booking_status' => 1,
                'is_finish' => false,
                'booking_address' => '',

                'created_at' => '2021-04-25 05:00:00',
                'updated_at' => '2021-04-25 05:00:00'
            ],
            [
                'id_customer' => 16,
                'id_photographer' => 18,
                'id_combo' => 3,
                'is_cancel' => false,
                'id_voucher' => 2,
                'start_time' => '2021-04-26 05:00:00',
                'end_time' => '2021-04-26 07:00:00',
                'price' => 450000,
                'booking_status' => 1,
                'is_finish' => false,
                'booking_address' => '',

                'created_at' => '2021-04-25 05:00:00',
                'updated_at' => '2021-04-25 05:00:00'
            ],
            [
                'id_customer' => 17,
                'id_photographer' => 21,
                'id_combo' => 3,
                'is_cancel' => false,
                'id_voucher' => 2,
                'start_time' => '2021-04-26 05:00:00',
                'end_time' => '2021-04-26 07:00:00',
                'price' => 450000,
                'booking_status' => 1,
                'is_finish' => false,
                'booking_address' => '',

                'created_at' => '2021-04-25 05:00:00', 
                'updated_at' => '2021-04-25 05:00:00'
            ],
            [
                'id_customer' => 17,
                'id_photographer' => 19,
                'id_combo' => 3,
                'is_cancel' => false,
                'id_voucher' => 2,
                'start_time' => '2021-04-26 05:00:00',
                'end_time' => '2021-04-26 07:00:00',
                'price' => 450000,
                'booking_status' => 1,
                'is_finish' => false,
                'booking_address' => '',

                'created_at' => '2021-04-25 05:00:00',
                'updated_at' => '2021-04-25 05:00:00'
            ],
            [
                'id_customer' => 5,
                'id_photographer' => 17,
                'id_combo' => 3,
                'is_cancel' => false,
                'id_voucher' => 2,
                'start_time' => '2021-04-26 05:00:00',
                'end_time' => '2021-04-26 07:00:00',
                'price' => 450000,
                'booking_status' => 1,
                'is_finish' => false,
                'booking_address' => '',

                'created_at' => '2021-04-25 05:00:00',
                'updated_at' => '2021-04-25 05:00:00'
            ],
            [
                'id_customer' => 9,
                'id_photographer' => 22,
                'id_combo' => 3,
                'is_cancel' => false,
                'id_voucher' => 2,
                'start_time' => '2021-04-26 05:00:00',
                'end_time' => '2021-04-26 07:00:00',
                'price' => 450000,
                'booking_status' => 1,
                'is_finish' => false,
                'booking_address' => '',

                'created_at' => '2021-04-25 05:00:00',
                'updated_at' => '2021-04-25 05:00:00'
            ],
            

        ]);
    }
}
