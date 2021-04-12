<?php

use Illuminate\Database\Seeder;

class DetailPhotographerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('detail_photographer')->insert([
            [
                'id_photographer' => 7,
                'nickname' => 'tran nhan',
                'short_description' => 'dam me, sang tao, pha cach',
                'address' => 'quan 4, xi gon',
                'limit_time' => 'Tat ca cac ngay trong tuan',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id_photographer' => 8,
                'nickname' => 'mon thuc',
                'short_description' => 'nguoi tre, nhiet huyet cao',
                'address' => 'quan cam, xi gon',
                'limit_time' => 'Cuoi tuan',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id_photographer' => 9,
                'nickname' => 'tu tru',
                'short_description' => 'mot con nguoi cua the ky',
                'address' => 'Da nang city',
                'limit_time' => 'Full time',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id_photographer' => 10,
                'nickname' => 'nguoi co don',
                'short_description' => 'can tim tri ki',
                'address' => 'Thanh Pho Thu Duc, sai gon',
                'limit_time' => 'Cuoi tuan va ngay le',
                'created_at' => now(),
                'updated_at' => now()
            ],
        ]);
    }
}
