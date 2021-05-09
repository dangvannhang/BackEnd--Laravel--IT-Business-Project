<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

        DB::table('post')->insert([
            [
                'id_photographer' => 17,
                'title' => 'Chụp ảnh cho người đi đường',
                'content' => 'Đã bao giờ bạn thấy những cảnh đẹp nhưng mà không có người mẫu để chụp, hôm qua, nhân dịp đi ...',
                'image' => 'https://www.pexels.com/vi-vn/anh/ng-i-dan-ong-d-ng-g-n-b-c-t-ng-mau-vang-deo-kinh-m-t-2896358/',
                'created_at' => now(),
                'updated_at' => now() 
            ],
            [
                'id_photographer' => 18,
                'title' => 'Ảnh đám cưới ở vùng cao',
                'content' => 'Chắc hẳn đã nhiều lần bạn thấy hình ảnh các đám cưới với đa dạng phong cách, nhưng có bao giờ bạn thấy đám cưới tại vùng cao nơi có các nghi lễ, phong tục...',
                'image' => 'https://kenh14cdn.com/2019/10/13/715439067139634324056826019099427837313024n-15709487918201918465757-15709784945311726668327.jpg',
                'created_at' => now(),
                'updated_at' => now() 
            ],
            [
                'id_photographer' => 19,
                'title' => 'Phong cảnh hồ Gươm',
                'content' => 'Đối với những du khách mới lần đầu đến Hà Nội thì Hồ Gươm là địa chỉ không thể bỏ qua...',
                'image' => 'https://www.vietfuntravel.com.vn/image/data/Ha-Noi/ho-hoan-kiem/Gioi-thieu-doi-net-ve-Ho-Hoan-Kiem-Ho-Guom-o-Ha-Noi-3.jpg',
                'created_at' => now(),
                'updated_at' => now() 
            ],
            [
                'id_photographer' => 20,
                'title' => 'Cây đa Sơn Trà - Đà Nẵng',
                'content' => 'Sơn Trà, một trong những nơi chứa đựng nhiều cảnh vật của Đà Nẵng...',
                'image' => 'https://danangsensetravel.com/view/at_phat-trien-diem-den-tai-cay-da-ngan-nam-tuoi-son-tra_79c83fef2e53325d786777babd8832ca.jpg',
                'created_at' => now(),
                'updated_at' => now() 
            ],
            [
                'id_photographer' => 21,
                'title' => 'Cuộc sống miền tây',
                'content' => 'Đã bao giờ bạn đi về miền tây, nơi có những câu hò da diết lòng người, đờn ca tài tử, trái cây miệt vườn...',
                'image' => 'https://1.bp.blogspot.com/-TJk6ES6GrdU/WEMjSWemnSI/AAAAAAAADVI/-oUvUHZZugA8yRRs3dxoccA_ynRnRmJ5QCLcB/s640/Di%2Bcu%2B1.jpg',
                'created_at' => now(),
                'updated_at' => now() 
            ],
            [
                'id_photographer' => 22,
                'title' => 'Nơi xa xôi',
                'content' => 'Khi được sinh ra thì tôi đã ở nơi mà mọi thứ còn quá thiều thốn, không có những đồ dùng hiện đại...',
                'image' => 'http://tranhphongcanhdep.com.vn/wp-content/uploads/2019/08/tranh-dong-que-don-gian-canh-dong-lua-ruong-nuong.jpg',
                'created_at' => now(),
                'updated_at' => now() 
            ],
        ]);
    }
}
