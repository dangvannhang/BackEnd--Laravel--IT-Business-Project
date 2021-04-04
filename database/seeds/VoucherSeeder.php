<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;


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
                'denomination' => 0
            ],
            [
                'code' => 'chaomung',
                'description' => 'Day la ma giam gia danh cho nhung nguoi moi tham gia su dung ap, co gia tri len den 25% (Khong qua 100k).',
                'count' => 20,
                'denomination' => 25
            ],
            [
                'code' => 'muahe',
                'description' => 'Day la ma giam gia danh cho mua he, giup cac ban co nhung tam hinh that ngau.',
                'count' => 12,
                'denomination' => 30
            ],
            [
                'code' => 'trolai',
                'description' => 'Ban da tro lai, chung toi co muon qua tang ban.',
                'count' => 20,
                'denomination' => 30
            ],
            [
                'code' => '1000nguoi',
                'description' => 'Nhan dip app duoc 1000 nguoi su dung, chung toi gui toi ban ma giam gia 1000nguoi.',
                'count' => 50,
                'denomination' => 15
            ],
            [
                'code' => '30thang4',
                'description' => 'Nhan ngay giai phong vietnam, chung toi rat vui ve gui toi ban ma giam gia.',
                'count' => 23,
                'denomination' => 25
            ]
        ]);
    }
}
