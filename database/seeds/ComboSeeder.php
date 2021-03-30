<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ComboSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        DB::table('combo')->insert([
            [
                'name_style' => 'Chụp ảnh phong cảnh',
                'description' => 'Là thể loại chụp ảnh những cảnh đẹp của thiên nhiên.',
                'image' => 'image1.jpg',
                'price' => 300000,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name_style' => 'Chụp ảnh dã ngoại',
                'description' => 'Là thể loại chụp ảnh dã ngoại.',
                'image' => 'image2.jpg',
                'price' => 350000,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name_style' => 'Chụp ảnh quảng cáo',
                'description' => 'Là thể loại chụp ảnh để quảng cáo cho các nhãn hàng.',
                'image' => 'image3.jpg',
                'price' => 700000,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name_style' => 'Chụp ảnh đám cưới',
                'description' => 'Là thể loại chụp ảnh tại những đám cưới nhằm ghi lại khoảnh khắc đáng nhớ của cặp đôi.',
                'image' => 'image4.jpg',
                'price' => 5000000,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name_style' => 'Chụp ảnh các cặp đôi',
                'description' => 'Bức ảnh mang hiệu ứng trong sáng, thể hiện tình yêu đôi lứa.',
                'image' => 'image5.jpg',
                'price' => 650000,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
