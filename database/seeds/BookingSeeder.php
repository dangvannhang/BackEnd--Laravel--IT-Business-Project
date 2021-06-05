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
                'id_voucher'=> 1,
                'start_time' => '2021-03-07',
                'time_booking' => 1,
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
                'start_time' => '2021-03-08',
                'time_booking' => 1,
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
                'start_time' => '2021-03-11',
                'time_booking' => 1,
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
                'start_time' => '2021-03-11',
                'time_booking' => 1,

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
                'start_time' => '2021-03-10',
                'time_booking' => 1,

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
                'start_time' => '2021-03-15',
                'time_booking' => 1,

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
                'start_time' => '2021-03-13',
                'time_booking' => 1,

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
                'start_time' => '2021-03-15',
                'time_booking' => 1,

                'price' => 450000,
                'booking_status' => 3,
                'is_finish' => false,
                'booking_address' => 'No address',
                'created_at' => '2021-03-12 11:23:10',
                'updated_at' => '2021-03-12 11:23:10'
            ],
            [
                'id_customer' => 16,
                'id_photographer' => 29,
                'id_combo' => 61,
                'id_voucher' => 2,
                'start_time' => '2021-03-18',
                'time_booking' => 1,
                'price' => 450000,
                'booking_status' => 2,
                'is_finish' => true,
                'booking_address' => 'Cong vien Gia Dinh',
                'created_at' => '2021-03-15 05:00:00',
                'updated_at' => '2021-03-15 12:00:00'
            ],
            [
                'id_customer' => 17,
                'id_photographer' => 27,
                'id_combo' => 55,
                'id_voucher' => 2,
                'start_time' => '2021-03-17',
                'time_booking' => 1,
                'price' => 450000,
                'booking_status' => 3,
                'is_finish' => false,
                'booking_address' => 'Cong vien Hoang Van Thu',
                'created_at' => '2021-03-15 09:30:00',
                'updated_at' => '2021-03-15 09:30:00'
            ],

            [
                'id_customer' => 15,
                'id_photographer' => 23,
                'id_combo' => 31,
                'id_voucher' => 2,
                'start_time' => '2021-03-22',
                'time_booking' => 1,
                'price' => 450000,
                'booking_status' => 2,
                'is_finish' => true,
                'booking_address' => 'Da Lat',
                'created_at' => '2021-03-20 11:00:00',
                'updated_at' => '2021-03-20 11:00:00'
            ],
            [
                'id_customer' => 14,
                'id_photographer' => 22,
                'id_combo' => 26,
                'id_voucher' => 2,
                'start_time' => '2021-03-23',
                'time_booking' => 1,
                'price' => 450000,
                'booking_status' => 2,
                'is_finish' => true,
                'booking_address' => 'Bien Vung Tau',
                'created_at' => '2021-03-20 15:00:00',
                'updated_at' => '2021-03-20 15:00:00'
            ],
            [
                'id_customer' => 13,
                'id_photographer' => 18,
                'id_combo' => 9,
                'id_voucher' => 2,
                'start_time' => '2021-03-28',
                'time_booking' => 1,
                'price' => 450000,
                'booking_status' => 2,
                'is_finish' => true,
                'booking_address' => 'Truong Chinh, Tan Binh, HCM',
                'created_at' => '2021-03-25 12:00:00',
                'updated_at' => '2021-03-25 12:00:00'
            ],
            [
                'id_customer' => 12,
                'id_photographer' => 21,
                'id_combo' => 23,
                'id_voucher' => 2,
                'start_time' => '2021-03-31',
                'time_booking' => 1,
                'price' => 450000,
                'booking_status' => 2,
                'is_finish' => true,
                'booking_address' => 'Studio 31 Nguyen Luong Bang, Ho Chi Minh',
                'created_at' => '2021-03-27 09:22:00',
                'updated_at' => '2021-03-27 09:22:00'
            ],
            [
                'id_customer' => 11,
                'id_photographer' => 23,
                'id_combo' => 32,
                'id_voucher' => 2,
                'start_time' => '2021-04-02',
                'time_booking' => 1,
                'price' => 450000,
                'booking_status' => 2,
                'is_finish' => true,
                'booking_address' => 'Cong Vien',
                'created_at' => '2021-03-31 08:00:00',
                'updated_at' => '2021-03-31 08:00:00'
            ],

            [
                'id_customer' => 6,
                'id_photographer' => 25,
                'id_combo' => 43,
                'id_voucher' => 2,
                'start_time' => '2021-04-07',
                'time_booking' => 1,
                'price' => 450000,
                'booking_status' => 2,
                'is_finish' => true,
                'booking_address' => 'Etown Cong Hoa',
                'created_at' => '2021-04-05 12:00:00',
                'updated_at' => '2021-04-05 12:00:00'
            ],

            [
                'id_customer' => 4,
                'id_photographer' => 26,
                'id_combo' => 50,
                'id_voucher' => 2,
                'start_time' => '2021-04-13',
                'time_booking' => 1,
                'price' => 450000,
                'booking_status' => 2,
                'is_finish' => true,
                'booking_address' => 'Sabeco',
                'created_at' => '2021-04-10 19:00:00',
                'updated_at' => '2021-04-10 19:00:00'
            ],
             [
                'id_customer' => 7,
                'id_photographer' => 27,
                'id_combo' => 51,
                'id_voucher' => 2,
                'start_time' => '2021-04-18',
                'time_booking' => 1,
                'price' => 450000,
                'booking_status' => 2,
                'is_finish' => true,
                'booking_address' => 'Cau vuot Hoa Cam',
                'created_at' => '2021-04-15 13:05:00',
                'updated_at' => '2021-04-15 13:05:00'
            ],
            [
                'id_customer' => 5,
                'id_photographer' => 28,
                'id_combo' => 57,
                'id_voucher' => 2,
                'start_time' => '2021-04-23',
                'time_booking' => 1,
                'price' => 450000,
                'booking_status' => 2,
                'is_finish' => true,
                'booking_address' => 'TPHCM',
                'created_at' => '2021-04-19 13:00:00',
                'updated_at' => '2021-04-19 13:00:00'
            ],
            [
                'id_customer' => 3,
                'id_photographer' => 29,
                'id_combo' => 62,
                'id_voucher' => 2,
                'start_time' => '2021-04-26',
                'time_booking' => 1,
                'price' => 450000,
                'booking_status' => 3,
                'is_finish' => false,
                'booking_address' => 'DN',
                'created_at' => '2021-04-23 11:00:00',
                'updated_at' => '2021-04-23 11:00:00'
            ],
            [
                'id_customer' => 9,
                'id_photographer' => 30,
                'id_combo' => 70,
                'id_voucher' => 2,
                'start_time' => '2021-04-25',
                'time_booking' => 1,
                'price' => 450000,
                'booking_status' => 2,
                'is_finish' => true,
                'booking_address' => 'Cong Vien',
                'created_at' => '2021-04-23 13:00:00',
                'updated_at' => '2021-04-23 13:00:00'
            ],
            [
                'id_customer' => 11,
                'id_photographer' => 22,
                'id_combo' => 3,
                'id_voucher' => 2,
                'start_time' => '2021-04-27',
                'time_booking' => 1,
                'price' => 450000,
                'booking_status' => 4,
                'is_finish' => false,
                'booking_address' => 'DN',
                'created_at' => '2021-04-25 13:00:00',
                'updated_at' => '2021-04-25 13:00:00'
            ],

        ]);
    }
}
