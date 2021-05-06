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
                'id_photographer' => 17,
                'name_style' => 'Chụp ảnh thiên nhiên',
                'description' => 'Là thể loại chụp ảnh những cảnh đẹp của thiên nhiên.',
                'image' => 'image1.jpg',
                'price' => 300000,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id_photographer' => 17,
                'name_style' => 'Chụp ảnh dã ngoại',
                'description' => 'Là thể loại chụp ảnh dã ngoại.',
                'image' => 'image2.jpg',
                'price' => 350000,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id_photographer' => 17,
                'name_style' => 'Chụp ảnh quảng cáo cho quần áo',
                'description' => 'Với kinh nghiệm từ năm 2019 trong lĩnh vực chụp ảnh quảng cáo cho các cửa hàng quần áo, các shop thời trang.',
                'image' => 'image3.jpg',
                'price' => 1000000,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id_photographer' => 17,
                'name_style' => 'Chụp ảnh đám cưới',
                'description' => 'Là thể loại chụp ảnh tại những đám cưới nhằm ghi lại khoảnh khắc đáng nhớ của cặp đôi.',
                'image' => 'image4.jpg',
                'price' => 5000000,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id_photographer' => 17,
                'name_style' => 'Chụp ảnh các cặp đôi',
                'description' => 'Bức ảnh mang hiệu ứng trong sáng, thể hiện tình yêu đôi lứa.',
                'image' => 'image5.jpg',
                'price' => 650000,
                'created_at' => now(),
                'updated_at' => now(),
            ],




            [
                'id_photographer' => 18,
                'name_style' => 'Chụp ảnh phong cảnh',
                'description' => 'Là thể loại chụp ảnh những cảnh đẹp của thiên nhiên.',
                'image' => 'image1.jpg',
                'price' => 300000,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id_photographer' => 18,
                'name_style' => 'Chụp ảnh dã ngoại',
                'description' => 'Là thể loại chụp ảnh dã ngoại.',
                'image' => 'image2.jpg',
                'price' => 350000,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id_photographer' => 18,
                'name_style' => 'Chụp ảnh quảng cáo',
                'description' => 'Là thể loại chụp ảnh để quảng cáo cho các nhãn hàng.',
                'image' => 'image3.jpg',
                'price' => 700000,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id_photographer' => 18,
                'name_style' => 'Chụp ảnh đám cưới',
                'description' => 'Là thể loại chụp ảnh tại những đám cưới nhằm ghi lại khoảnh khắc đáng nhớ của cặp đôi.',
                'image' => 'image4.jpg',
                'price' => 5000000,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id_photographer' => 18,
                'name_style' => 'Chụp ảnh các cặp đôi',
                'description' => 'Bức ảnh mang hiệu ứng trong sáng, thể hiện tình yêu đôi lứa.',
                'image' => 'image5.jpg',
                'price' => 650000,
                'created_at' => now(),
                'updated_at' => now(),
            ],






            [
                'id_photographer' => 19,
                'name_style' => 'Chụp ảnh phong cảnh',
                'description' => 'Là thể loại chụp ảnh những cảnh đẹp của thiên nhiên.',
                'image' => 'image1.jpg',
                'price' => 300000,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id_photographer' => 19,
                'name_style' => 'Chụp ảnh dã ngoại',
                'description' => 'Là thể loại chụp ảnh dã ngoại.',
                'image' => 'image2.jpg',
                'price' => 350000,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id_photographer' => 19,
                'name_style' => 'Chụp ảnh quảng cáo',
                'description' => 'Là thể loại chụp ảnh để quảng cáo cho các nhãn hàng.',
                'image' => 'image3.jpg',
                'price' => 700000,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id_photographer' => 19,
                'name_style' => 'Chụp ảnh đám cưới',
                'description' => 'Là thể loại chụp ảnh tại những đám cưới nhằm ghi lại khoảnh khắc đáng nhớ của cặp đôi.',
                'image' => 'image4.jpg',
                'price' => 5000000,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id_photographer' => 19,
                'name_style' => 'Chụp ảnh các cặp đôi',
                'description' => 'Bức ảnh mang hiệu ứng trong sáng, thể hiện tình yêu đôi lứa.',
                'image' => 'image5.jpg',
                'price' => 650000,
                'created_at' => now(),
                'updated_at' => now(),
            ],




            [
                'id_photographer' => 20,
                'name_style' => 'Chụp ảnh phong cảnh',
                'description' => 'Là thể loại chụp ảnh những cảnh đẹp của thiên nhiên.',
                'image' => 'image1.jpg',
                'price' => 300000,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id_photographer' => 20,
                'name_style' => 'Chụp ảnh dã ngoại',
                'description' => 'Là thể loại chụp ảnh dã ngoại.',
                'image' => 'image2.jpg',
                'price' => 350000,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id_photographer' => 20,
                'name_style' => 'Chụp ảnh quảng cáo',
                'description' => 'Là thể loại chụp ảnh để quảng cáo cho các nhãn hàng.',
                'image' => 'image3.jpg',
                'price' => 700000,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id_photographer' => 20,
                'name_style' => 'Chụp ảnh đám cưới',
                'description' => 'Là thể loại chụp ảnh tại những đám cưới nhằm ghi lại khoảnh khắc đáng nhớ của cặp đôi.',
                'image' => 'image4.jpg',
                'price' => 5000000,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id_photographer' => 20,
                'name_style' => 'Chụp ảnh các cặp đôi',
                'description' => 'Bức ảnh mang hiệu ứng trong sáng, thể hiện tình yêu đôi lứa.',
                'image' => 'image5.jpg',
                'price' => 650000,
                'created_at' => now(),
                'updated_at' => now(),
            ],





            [
                'id_photographer' => 21,
                'name_style' => 'Chụp ảnh phong cảnh',
                'description' => 'Là thể loại chụp ảnh những cảnh đẹp của thiên nhiên.',
                'image' => 'image1.jpg',
                'price' => 300000,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id_photographer' => 21,
                'name_style' => 'Chụp ảnh dã ngoại',
                'description' => 'Là thể loại chụp ảnh dã ngoại.',
                'image' => 'image2.jpg',
                'price' => 350000,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id_photographer' => 21,
                'name_style' => 'Chụp ảnh quảng cáo',
                'description' => 'Là thể loại chụp ảnh để quảng cáo cho các nhãn hàng.',
                'image' => 'image3.jpg',
                'price' => 700000,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id_photographer' => 21,
                'name_style' => 'Chụp ảnh đám cưới',
                'description' => 'Là thể loại chụp ảnh tại những đám cưới nhằm ghi lại khoảnh khắc đáng nhớ của cặp đôi.',
                'image' => 'image4.jpg',
                'price' => 5000000,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id_photographer' => 21,
                'name_style' => 'Chụp ảnh các cặp đôi',
                'description' => 'Bức ảnh mang hiệu ứng trong sáng, thể hiện tình yêu đôi lứa.',
                'image' => 'image5.jpg',
                'price' => 650000,
                'created_at' => now(),
                'updated_at' => now(),
            ],




            [
                'id_photographer' => 22,
                'name_style' => 'Chụp ảnh phong cảnh',
                'description' => 'Là thể loại chụp ảnh những cảnh đẹp của thiên nhiên.',
                'image' => 'image1.jpg',
                'price' => 300000,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id_photographer' => 22,
                'name_style' => 'Chụp ảnh dã ngoại',
                'description' => 'Là thể loại chụp ảnh dã ngoại.',
                'image' => 'image2.jpg',
                'price' => 350000,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id_photographer' => 22,
                'name_style' => 'Chụp ảnh quảng cáo',
                'description' => 'Là thể loại chụp ảnh để quảng cáo cho các nhãn hàng.',
                'image' => 'image3.jpg',
                'price' => 700000,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id_photographer' => 22,
                'name_style' => 'Chụp ảnh đám cưới',
                'description' => 'Là thể loại chụp ảnh tại những đám cưới nhằm ghi lại khoảnh khắc đáng nhớ của cặp đôi.',
                'image' => 'image4.jpg',
                'price' => 5000000,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id_photographer' => 22,
                'name_style' => 'Chụp ảnh các cặp đôi',
                'description' => 'Bức ảnh mang hiệu ứng trong sáng, thể hiện tình yêu đôi lứa.',
                'image' => 'image5.jpg',
                'price' => 650000,
                'created_at' => now(),
                'updated_at' => now(),
            ],





            [
                'id_photographer' => 23,
                'name_style' => 'Chụp ảnh phong cảnh',
                'description' => 'Là thể loại chụp ảnh những cảnh đẹp của thiên nhiên.',
                'image' => 'image1.jpg',
                'price' => 300000,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id_photographer' => 23,
                'name_style' => 'Chụp ảnh dã ngoại',
                'description' => 'Là thể loại chụp ảnh dã ngoại.',
                'image' => 'image2.jpg',
                'price' => 350000,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id_photographer' => 23,
                'name_style' => 'Chụp ảnh quảng cáo',
                'description' => 'Là thể loại chụp ảnh để quảng cáo cho các nhãn hàng.',
                'image' => 'image3.jpg',
                'price' => 700000,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id_photographer' => 23,
                'name_style' => 'Chụp ảnh đám cưới',
                'description' => 'Là thể loại chụp ảnh tại những đám cưới nhằm ghi lại khoảnh khắc đáng nhớ của cặp đôi.',
                'image' => 'image4.jpg',
                'price' => 5000000,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id_photographer' => 23,
                'name_style' => 'Chụp ảnh các cặp đôi',
                'description' => 'Bức ảnh mang hiệu ứng trong sáng, thể hiện tình yêu đôi lứa.',
                'image' => 'image5.jpg',
                'price' => 650000,
                'created_at' => now(),
                'updated_at' => now(),
            ],



            [
                'id_photographer' => 24,
                'name_style' => 'Chụp ảnh phong cảnh',
                'description' => 'Là thể loại chụp ảnh những cảnh đẹp của thiên nhiên.',
                'image' => 'image1.jpg',
                'price' => 300000,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id_photographer' => 24,
                'name_style' => 'Chụp ảnh dã ngoại',
                'description' => 'Là thể loại chụp ảnh dã ngoại.',
                'image' => 'image2.jpg',
                'price' => 350000,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id_photographer' => 24,
                'name_style' => 'Chụp ảnh quảng cáo',
                'description' => 'Là thể loại chụp ảnh để quảng cáo cho các nhãn hàng.',
                'image' => 'image3.jpg',
                'price' => 700000,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id_photographer' => 24,
                'name_style' => 'Chụp ảnh đám cưới',
                'description' => 'Là thể loại chụp ảnh tại những đám cưới nhằm ghi lại khoảnh khắc đáng nhớ của cặp đôi.',
                'image' => 'image4.jpg',
                'price' => 5000000,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id_photographer' => 24,
                'name_style' => 'Chụp ảnh các cặp đôi',
                'description' => 'Bức ảnh mang hiệu ứng trong sáng, thể hiện tình yêu đôi lứa.',
                'image' => 'image5.jpg',
                'price' => 650000,
                'created_at' => now(),
                'updated_at' => now(),
            ],




            [
                'id_photographer' => 25,
                'name_style' => 'Chụp ảnh phong cảnh',
                'description' => 'Là thể loại chụp ảnh những cảnh đẹp của thiên nhiên.',
                'image' => 'image1.jpg',
                'price' => 300000,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id_photographer' => 25,
                'name_style' => 'Chụp ảnh dã ngoại',
                'description' => 'Là thể loại chụp ảnh dã ngoại.',
                'image' => 'image2.jpg',
                'price' => 350000,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id_photographer' => 25,
                'name_style' => 'Chụp ảnh quảng cáo',
                'description' => 'Là thể loại chụp ảnh để quảng cáo cho các nhãn hàng.',
                'image' => 'image3.jpg',
                'price' => 700000,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id_photographer' => 25,
                'name_style' => 'Chụp ảnh đám cưới',
                'description' => 'Là thể loại chụp ảnh tại những đám cưới nhằm ghi lại khoảnh khắc đáng nhớ của cặp đôi.',
                'image' => 'image4.jpg',
                'price' => 5000000,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id_photographer' => 25,
                'name_style' => 'Chụp ảnh các cặp đôi',
                'description' => 'Bức ảnh mang hiệu ứng trong sáng, thể hiện tình yêu đôi lứa.',
                'image' => 'image5.jpg',
                'price' => 650000,
                'created_at' => now(),
                'updated_at' => now(),
            ],



            [
                'id_photographer' => 26,
                'name_style' => 'Chụp ảnh phong cảnh',
                'description' => 'Là thể loại chụp ảnh những cảnh đẹp của thiên nhiên.',
                'image' => 'image1.jpg',
                'price' => 300000,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id_photographer' => 26,
                'name_style' => 'Chụp ảnh dã ngoại',
                'description' => 'Là thể loại chụp ảnh dã ngoại.',
                'image' => 'image2.jpg',
                'price' => 350000,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id_photographer' => 26,
                'name_style' => 'Chụp ảnh quảng cáo',
                'description' => 'Là thể loại chụp ảnh để quảng cáo cho các nhãn hàng.',
                'image' => 'image3.jpg',
                'price' => 700000,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id_photographer' => 26,
                'name_style' => 'Chụp ảnh đám cưới',
                'description' => 'Là thể loại chụp ảnh tại những đám cưới nhằm ghi lại khoảnh khắc đáng nhớ của cặp đôi.',
                'image' => 'image4.jpg',
                'price' => 5000000,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id_photographer' => 26,
                'name_style' => 'Chụp ảnh các cặp đôi',
                'description' => 'Bức ảnh mang hiệu ứng trong sáng, thể hiện tình yêu đôi lứa.',
                'image' => 'image5.jpg',
                'price' => 650000,
                'created_at' => now(),
                'updated_at' => now(),
            ],




            [
                'id_photographer' => 27,
                'name_style' => 'Chụp ảnh phong cảnh',
                'description' => 'Là thể loại chụp ảnh những cảnh đẹp của thiên nhiên.',
                'image' => 'image1.jpg',
                'price' => 300000,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id_photographer' => 27,
                'name_style' => 'Chụp ảnh dã ngoại',
                'description' => 'Là thể loại chụp ảnh dã ngoại.',
                'image' => 'image2.jpg',
                'price' => 350000,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id_photographer' => 27,
                'name_style' => 'Chụp ảnh quảng cáo',
                'description' => 'Là thể loại chụp ảnh để quảng cáo cho các nhãn hàng.',
                'image' => 'image3.jpg',
                'price' => 700000,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id_photographer' => 27,
                'name_style' => 'Chụp ảnh đám cưới',
                'description' => 'Là thể loại chụp ảnh tại những đám cưới nhằm ghi lại khoảnh khắc đáng nhớ của cặp đôi.',
                'image' => 'image4.jpg',
                'price' => 5000000,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id_photographer' => 27,
                'name_style' => 'Chụp ảnh các cặp đôi',
                'description' => 'Bức ảnh mang hiệu ứng trong sáng, thể hiện tình yêu đôi lứa.',
                'image' => 'image5.jpg',
                'price' => 650000,
                'created_at' => now(),
                'updated_at' => now(),
            ],




            [
                'id_photographer' => 28,
                'name_style' => 'Chụp ảnh phong cảnh',
                'description' => 'Là thể loại chụp ảnh những cảnh đẹp của thiên nhiên.',
                'image' => 'image1.jpg',
                'price' => 300000,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id_photographer' => 28,
                'name_style' => 'Chụp ảnh dã ngoại',
                'description' => 'Là thể loại chụp ảnh dã ngoại.',
                'image' => 'image2.jpg',
                'price' => 350000,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id_photographer' => 28,
                'name_style' => 'Chụp ảnh quảng cáo',
                'description' => 'Là thể loại chụp ảnh để quảng cáo cho các nhãn hàng.',
                'image' => 'image3.jpg',
                'price' => 700000,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id_photographer' => 28,
                'name_style' => 'Chụp ảnh đám cưới',
                'description' => 'Là thể loại chụp ảnh tại những đám cưới nhằm ghi lại khoảnh khắc đáng nhớ của cặp đôi.',
                'image' => 'image4.jpg',
                'price' => 5000000,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id_photographer' => 28,
                'name_style' => 'Chụp ảnh các cặp đôi',
                'description' => 'Bức ảnh mang hiệu ứng trong sáng, thể hiện tình yêu đôi lứa.',
                'image' => 'image5.jpg',
                'price' => 650000,
                'created_at' => now(),
                'updated_at' => now(),
            ],




            [
                'id_photographer' => 29,
                'name_style' => 'Chụp ảnh phong cảnh',
                'description' => 'Là thể loại chụp ảnh những cảnh đẹp của thiên nhiên.',
                'image' => 'image1.jpg',
                'price' => 300000,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id_photographer' => 29,
                'name_style' => 'Chụp ảnh dã ngoại',
                'description' => 'Là thể loại chụp ảnh dã ngoại.',
                'image' => 'image2.jpg',
                'price' => 350000,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id_photographer' => 29,
                'name_style' => 'Chụp ảnh quảng cáo',
                'description' => 'Là thể loại chụp ảnh để quảng cáo cho các nhãn hàng.',
                'image' => 'image3.jpg',
                'price' => 700000,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id_photographer' => 29,
                'name_style' => 'Chụp ảnh đám cưới',
                'description' => 'Là thể loại chụp ảnh tại những đám cưới nhằm ghi lại khoảnh khắc đáng nhớ của cặp đôi.',
                'image' => 'image4.jpg',
                'price' => 5000000,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id_photographer' => 29,
                'name_style' => 'Chụp ảnh các cặp đôi',
                'description' => 'Bức ảnh mang hiệu ứng trong sáng, thể hiện tình yêu đôi lứa.',
                'image' => 'image5.jpg',
                'price' => 650000,
                'created_at' => now(),
                'updated_at' => now(),
            ],



            [
                'id_photographer' => 30,
                'name_style' => 'Chụp ảnh phong cảnh',
                'description' => 'Là thể loại chụp ảnh những cảnh đẹp của thiên nhiên.',
                'image' => 'image1.jpg',
                'price' => 300000,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id_photographer' => 30,
                'name_style' => 'Chụp ảnh dã ngoại',
                'description' => 'Là thể loại chụp ảnh dã ngoại.',
                'image' => 'image2.jpg',
                'price' => 350000,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id_photographer' => 30,
                'name_style' => 'Chụp ảnh quảng cáo',
                'description' => 'Là thể loại chụp ảnh để quảng cáo cho các nhãn hàng.',
                'image' => 'image3.jpg',
                'price' => 700000,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id_photographer' => 30,
                'name_style' => 'Chụp ảnh đám cưới',
                'description' => 'Là thể loại chụp ảnh tại những đám cưới nhằm ghi lại khoảnh khắc đáng nhớ của cặp đôi.',
                'image' => 'image4.jpg',
                'price' => 5000000,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id_photographer' => 30,
                'name_style' => 'Chụp ảnh các cặp đôi',
                'description' => 'Bức ảnh mang hiệu ứng trong sáng, thể hiện tình yêu đôi lứa.',
                'image' => 'image5.jpg',
                'price' => 650000,
                'created_at' => now(),
                'updated_at' => now(),
            ],




            [
                'id_photographer' => 31,
                'name_style' => 'Chụp ảnh phong cảnh',
                'description' => 'Là thể loại chụp ảnh những cảnh đẹp của thiên nhiên.',
                'image' => 'image1.jpg',
                'price' => 300000,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id_photographer' => 31,
                'name_style' => 'Chụp ảnh dã ngoại',
                'description' => 'Là thể loại chụp ảnh dã ngoại.',
                'image' => 'image2.jpg',
                'price' => 350000,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id_photographer' => 31,
                'name_style' => 'Chụp ảnh quảng cáo',
                'description' => 'Là thể loại chụp ảnh để quảng cáo cho các nhãn hàng.',
                'image' => 'image3.jpg',
                'price' => 700000,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id_photographer' => 31,
                'name_style' => 'Chụp ảnh đám cưới',
                'description' => 'Là thể loại chụp ảnh tại những đám cưới nhằm ghi lại khoảnh khắc đáng nhớ của cặp đôi.',
                'image' => 'image4.jpg',
                'price' => 5000000,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id_photographer' => 31,
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
