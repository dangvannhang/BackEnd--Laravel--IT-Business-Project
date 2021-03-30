<?php

use Illuminate\Database\Seeder;

class MainStyleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('main_style')->insert([
            [
                'name' => 'Cổ trang',
                'descr' => 'Là thể loại ảnh dành cho những bạn đam mê cổ trang.',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Năng động',
                'descr' => 'Là những bức ảnh thể hiện sự năng động.',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Gia đình',
                'descr' => 'Thể hiện tình cảm của gia đình, cũng như thuần phong mỹ tục Việt Nam.',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Vintage',
                'descr' => 'Thể loại ảnh dành cho mấy người thích chơi đồ cổ.',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Thời trang',
                'descr' => 'Thể hiện sự sành điệu, các xu hướng của thời trang trên toàn thế giới.',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Thiên nhiên',
                'descr' => 'Thể hiện cảnh đẹp của mẹ thiên nhiên.',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Thể thao',
                'descr' => 'Ghi lại những khoảnh khắc, dấu ấn của các vận động viên.',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Động vật',
                'descr' => 'Ghi lại các hoạt động thường ngày của các loài động vật.',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Nghệ thuật đường phố',
                'descr' => 'Ghi lại hình ảnh của những bộ môn thể thao đường phố như là trượt ván, sơn tường.',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Đồ ăn',
                'descr' => 'Giúp ghi lại những hình ảnh đẹp đẽ của các món ăn.',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Bầu trời về đêm',
                'descr' => 'Khi màn đêm buông xuống thì chính là lúc thiên nhiên trở mình, hiện ra những khía cạnh khác của cuộc sống.',
                'created_at' => now(),
                'updated_at' => now()
            ],

        ]);
    }
}
