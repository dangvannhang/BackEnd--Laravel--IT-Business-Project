<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class VoucherSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('voucher')->insert([
            [
                'code' => 'nothing',
                'description' => 'code test',
                'count' => 0,
                'denomination' => 0,
                'start_time' => '2021-01-01 23:00:00 ',
                'end_time' => '2022-01-01 23:00:00', 
                'is_expired' => false
            ],
            [
                'code' => 'chaomung',
                'description' => 'Day la ma giam gia danh cho nhung nguoi moi tham gia su dung ap, co gia tri len den 25% (Khong qua 100k).',
                'count' => 20,
                'denomination' => 25,
                'start_time' => '2021-01-01 06:00:00',
                'end_time' => '2022-01-01 06:00:00', 
                'is_expired' =>  false
            ],
            [
                'code' => 'muahe',
                'description' => 'Day la ma giam gia danh cho mua he, giup cac ban co nhung tam hinh that ngau.',
                'count' => 12,
                'denomination' => 30,
                'start_time' => '2021-04-01 03:00:00',
                'end_time' => '2021-08-08 23:00:00', 
                'is_expired' => false
            ],
            [
                'code' => 'trolai',
                'description' => 'Ban da tro lai, chung toi co muon qua tang ban.',
                'count' => 20,
                'denomination' => 30,
                'start_time' => '2021-04-01 06:00:00',
                'end_time' => '2021-07-08 06:00:00', 
                'is_expired' => false
            ],
            [
                'code' => '1000nguoi',
                'description' => 'Nhan dip app duoc 1000 nguoi su dung, chung toi gui toi ban ma giam gia 1000nguoi.',
                'count' => 50,
                'denomination' => 15,
                'start_time' => '2021-04-01 00:00:00',
                'end_time' => '2021-04-08 23:59:59', 
                'is_expired' => false
            ],
            [
                'code' => '30thang4',
                'description' => 'Nhan ngay giai phong vietnam, chung toi rat vui ve gui toi ban ma giam gia.',
                'count' => 23,
                'denomination' => 25,
                'start_time' => '2021-04-25 00:00:00',
                'end_time' => '2021-05-08 00:00:00', 
                'is_expired' => false
            ]
        ]);
    }
}
