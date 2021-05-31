<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;


class PhotographerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('photographer')->insert([
            [
                'id_photographer' => 17,
                'nickname' => 'Lâm Thanh Tùng',
                'studio_address' => 'Da Nang',
                'limitation_time' => '7,8',
                'descript' => 'Một con người thích làm đẹp cho người khác, các bạn có thể follow mình trên kênh tiktok: nhangteo'
            ],
            [
                'id_photographer' => 18,
                'nickname' => 'Văn Sĩ',
                'studio_address' => 'Sai Gon',
                'limitation_time' => '2,3,4,5,6,7,8',
                'descript' => 'Xuất thân từ một gia đình nghệ thuật, mình bắt đầu yêu chụp ảnh.'
            ],
            [
                'id_photographer' => 19,
                'nickname' => 'Văn Hùng',
                'studio_address' => 'Da Nang',
                'limitation_time' => '7,8',
                'descript' => 'Chụp ảnh là một cái gì đó rất là khó, theo đuổi nó càng lâu thì càng nhận thấy có càng nhiều thứ phải học.'
            ],
            [
                'id_photographer' => 20,
                'nickname' => 'Lê Quốc',
                'studio_address' => 'Sai Gon',
                'limitation_time' => '2,3,4,5,6,7,8',
                'descript' => 'Với sự kế thừa từ người bố cũng là một nhà nhiếp ảnh đã mang đến cho tôi nhiều điều, chụp ảnh như là một nguồn sống của tôi.'
            ],
            [
                'id_photographer' => 21,
                'nickname' => 'Minh Tiến',
                'studio_address' => 'Sai Gon',
                'limitation_time' => '2,3,4,5,6,7,8',
                'descript' => 'Tôi sẽ cố gắng giúp các bạn có được những thứ mà các bạn cảm thấy xứng đáng với số tiền bỏ ra.'
            ],
            [
                'id_photographer' => 22,
                'nickname' => 'Đình Trí',
                'studio_address' => 'Sai Gon',
                'limitation_time' => '2,3,4,5,6,7,8',
                'descript' => 'Tôi là một người tự dô, thích đi đây đó và mang lại những bức ảnh đẹp cho đời.'
            ],
            [
                'id_photographer' => 23,
                'nickname' => 'Văn Định',
                'studio_address' => 'Sai Gon',
                'limitation_time' => '2,3,4,5,6,7,8',
                'descript' => 'Với những năm kinh nghiệm chụp ảnh cho các shop thời trang, tôi tin mình sẽ đem lại cho các bạn sự hài lòng nhất định.'
            ],
            [
                'id_photographer' => 24,
                'nickname' => 'Văn Nhàng',
                'studio_address' => 'Sai Gon',
                'limitation_time' => '2,3,4,5,6,7,8',
                'descript' => 'Bắt đầu cảm thấy thích lưu lại khoảng khắc cho sau này nên tôi đã chọn là một nhà nhiếp ảnh, một người lưu giữ khoảng khắc.'
            ],
            [
                'id_photographer' => 25,
                'nickname' => 'Hồng My',
                'studio_address' => 'Sai Gon',
                'limitation_time' => '2,3,4,5,6,7,8',
                'descript' => 'Chụp ảnh là một cái gì đó đã ăn sâu vào trong tôi, sống thiếu nó như tôi đã không có sức sống.'
            ],
            [
                'id_photographer' => 26,
                'nickname' => 'Sài Gòn',
                'studio_address' => 'Sai Gon',
                'limitation_time' => '2,3,4,5,6,7,8',
                'descript' => 'Bắt đầu tự chụp các bức ảnh cho bạn bè từ năm 17 tuổi và sau đó học thêm để nâng cao tay nghề. Các bạn có thể xem thêm mình tại tiktok: huychupanh'
            ],
            [
                'id_photographer' => 27,
                'nickname' => 'Thanh Sang',
                'studio_address' => 'Sai Gon',
                'limitation_time' => '2,3,4,5,6,7,8',
                'descript' => 'Sinh ra tại một nơi mà có rất nhiều cảnh đẹp đã thôi thúc tôi trở thành một nhà nhiếp ảnh để có thể quảng bá quê hương, ghi lại các khoảnh khắc đẹp.'
            ],

                        [
                'id_photographer' => 28,
                'nickname' => 'Gia Lâm',
                'studio_address' => 'Ha Noi',
                'limitation_time' => '2,3,4,5,6,7,8',
                'descript' => 'Nếu các bạn cần một người  giúp các bạn ghi lại các khoảnh khắc đáng nhớ của mình thì có thể gọi cho tôi.'
            ],
            [
                'id_photographer' => 29,
                'nickname' => 'Hoàng Hoa studio', 
                'studio_address' => 'Sai Gon',
                'limitation_time' => '2,3,4,5,6,7,8',
                'descript' => 'Với hơn 5 năm kinh nghiệm, mình có thể mang lại cho các bạn các trải nghiệm tốt nhất.'
            ],
            [
                'id_photographer' => 30,
                'nickname' => 'Đức Hòa',
                'studio_address' => 'Sai Gon',
                'limitation_time' => '2,3,4,5,6,7,8',
                'descript' => 'Bắt đầu từ sở thích chụp ảnh xong rồi muốn kiếm sống từ nó nên đã thôi thúc tôi học thêm nhiều thứ để có thể trở nên như bây giờ.'
            ],
            [
                'id_photographer' => 31,
                'nickname' => 'Tấn Đạt',
                'studio_address' => 'Sai Gon',
                'limitation_time' => '2,3,4,5,6,7,8',
                'descript' => 'Từ sở thích trở thành công việc, nhiếp ảnh là một cái gì đó mà không thể thay thế trong tôi.'
            ]
        ]);
    }
}
