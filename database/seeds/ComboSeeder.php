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
                'image' => 'https://camerabox.vn/uploads/news/2018_11/chup-anh-thien-nhien-theo-mua-2.jpg',
                'price' => 300000,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id_photographer' => 17,
                'name_style' => 'Chụp ảnh dã ngoại',
                'description' => 'Là thể loại chụp ảnh dã ngoại.',
                'image' => 'https://lh3.googleusercontent.com/proxy/fae0Bj3ChF5FKHpoB-6bmEYwpUS6ZhAE3ppQbAM8ifaQe-3ZrK456bRpWV54WfKBa_ppgF-8tPTc2VYnkj-PA82OdgJR-amDLFe7_9oU9krT_31NaEqo8pu5QTbj4Adc-Q2P2KILMsBVdIKHe2yg',
                'price' => 350000,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id_photographer' => 17,
                'name_style' => 'Chụp ảnh quảng cáo cho quần áo',
                'description' => 'Với kinh nghiệm từ năm 2019 trong lĩnh vực chụp ảnh quảng cáo cho các cửa hàng quần áo, các shop thời trang.',
                'image' => 'https://chupanhvn.s3.ap-southeast-1.amazonaws.com/wp-content/uploads/2017/03/23075754/chup-anh-quan-ao.jpg',
                'price' => 1000000,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id_photographer' => 17,
                'name_style' => 'Chụp ảnh đám cưới',
                'description' => 'Là thể loại chụp ảnh tại những đám cưới nhằm ghi lại khoảnh khắc đáng nhớ của cặp đôi.',
                'image' => 'http://www.flycamsaigon.com.vn/kcfinder/upload/images/chup-anh-cuoi-tron-goi-5.jpg',
                'price' => 5000000,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id_photographer' => 17,
                'name_style' => 'Chụp ảnh các cặp đôi',
                'description' => 'Bức ảnh mang hiệu ứng trong sáng, thể hiện tình yêu đôi lứa.',
                'image' => 'https://halocatravel.com/wp-content/uploads/2020/04/chuan-bi-hon-so-deep.jpg',
                'price' => 650000,
                'created_at' => now(),
                'updated_at' => now(),
            ],




            [
                'id_photographer' => 18,
                'name_style' => 'Chụp ảnh phong cảnh',
                'description' => 'Là thể loại chụp ảnh những cảnh đẹp của thiên nhiên.',
                'image' => 'https://kenh14cdn.com/thumb_w/600/04d50bbf2a/2015/08/10/ip1-a5f7a.jpg',
                'price' => 300000,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id_photographer' => 18,
                'name_style' => 'Chụp ảnh dã ngoại',
                'description' => 'Là thể loại chụp ảnh dã ngoại.',
                'image' => 'https://vivianstudio.vn/wp-content/uploads/2020/07/BIN_4430.jpg',
                'price' => 350000,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id_photographer' => 18,
                'name_style' => 'Chụp ảnh quảng cáo',
                'description' => 'Là thể loại chụp ảnh để quảng cáo cho các nhãn hàng.',
                'image' => 'https://www.chupsanpham.net/wp-content/uploads/2018/02/chup-anh-quang-cao-san-pham-voi-nguoi-mau-can-luu-y-nhung-gi-01.jpg',
                'price' => 700000,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id_photographer' => 18,
                'name_style' => 'Chụp ảnh đám cưới',
                'description' => 'Là thể loại chụp ảnh tại những đám cưới nhằm ghi lại khoảnh khắc đáng nhớ của cặp đôi.',
                'image' => 'https://sansan.vn/wp-content/uploads/2018/04/anh-cuoi-dam-cuoi-dep.jpg',
                'price' => 5000000,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id_photographer' => 18,
                'name_style' => 'Chụp ảnh các cặp đôi',
                'description' => 'Bức ảnh mang hiệu ứng trong sáng, thể hiện tình yêu đôi lứa.',
                'image' => 'https://www.vivosmartphone.vn/uploads/MANGOADS/T%E1%BA%A1o%20d%C3%A1ng%20ch%E1%BB%A5p%20%E1%BA%A3nh/%C4%91%C5%A9a%20l%E1%BB%87ch/1.jpg',
                'price' => 650000,
                'created_at' => now(),
                'updated_at' => now(),
            ],






            [
                'id_photographer' => 19,
                'name_style' => 'Chụp ảnh phong cảnh',
                'description' => 'Là thể loại chụp ảnh những cảnh đẹp của thiên nhiên.',
                'image' => 'https://zshop.vn/blogs/wp-content/uploads/2016/10/nhung-hinh-anh-thien-nhien-khi-binh-minh-vua-len-lam-xao-xuyen-long-nguoi-3.jpg',
                'price' => 300000,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id_photographer' => 19,
                'name_style' => 'Chụp ảnh dã ngoại',
                'description' => 'Là thể loại chụp ảnh dã ngoại.',
                'image' => 'https://lh3.googleusercontent.com/proxy/JhDf9xQGCIoSTOJ_m0rK9qsJzGfTXhUUM4RLPrM-aXF9HNrTjneiRMFjlHn37xZ7dUmVHORLY_FkPSjiSiTof4S3hXDRBAimu54fsibqELoLQZM4JF05cDkuJbadOWnZvSkiWGKP8ETwZxRz6pE',
                'price' => 350000,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id_photographer' => 19,
                'name_style' => 'Chụp ảnh quảng cáo',
                'description' => 'Là thể loại chụp ảnh để quảng cáo cho các nhãn hàng.',
                'image' => 'https://studios.vn/wp-content/uploads/2018/02/bao-gia-chup-dich-vu-chup-anh-quang-cao-001.png',
                'price' => 700000,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id_photographer' => 19,
                'name_style' => 'Chụp ảnh tiệc cưới',
                'description' => 'Là thể loại chụp ảnh tại những đám cưới nhằm ghi lại khoảnh khắc đáng nhớ của cặp đôi.',
                'image' => 'https://www.marry.vn/images/detailed/206/KLT_2419-3.jpg',
                'price' => 5000000,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id_photographer' => 19,
                'name_style' => 'Chụp ảnh các cặp đôi',
                'description' => 'Bức ảnh mang hiệu ứng trong sáng, thể hiện tình yêu đôi lứa.',
                'image' => 'https://aoxuatkhau.com/wp-content/uploads/2020/10/chup-hinh-au-yem2.jpg',
                'price' => 650000,
                'created_at' => now(),
                'updated_at' => now(),
            ],




            [
                'id_photographer' => 20,
                'name_style' => 'Chụp ảnh phong cảnh',
                'description' => 'Là thể loại chụp ảnh những cảnh đẹp của thiên nhiên.',
                'image' => 'https://farm9.staticflickr.com/8817/28951441513_cafbe2f8d0_z.jpg',
                'price' => 300000,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id_photographer' => 20,
                'name_style' => 'Chụp ảnh dã ngoại',
                'description' => 'Là thể loại chụp ảnh dã ngoại.',
                'image' => 'https://chupanhvn.s3.ap-southeast-1.amazonaws.com/wp-content/uploads/2017/09/23032823/chup-anh-da-ngoai4.jpg',
                'price' => 350000,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id_photographer' => 20,
                'name_style' => 'Chụp ảnh quảng cáo',
                'description' => 'Là thể loại chụp ảnh để quảng cáo cho các nhãn hàng.',
                'image' => 'https://lavendermedia.vn/wp-content/uploads/2019/10/nguoi-mau-chup-hinh-quang-cao-4.jpg',
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
                'image' => 'https://lh3.googleusercontent.com/proxy/OuzEfuHcrDadeHvR0tZ2kjhIQ4dXShNzRHeVVb3qB3R7StbSNCkF8sKhsh_A2Abw4tKMVJr3Xl5r_vSRkOEcw8moqtDXsuBRHS0vg2nD2jRLYYVW1ZS5K809IUlXtWwQPurPXjQfT7osofBOF0_LzQ6RsWYFtsbvYmbeCnzU7pDcrDVKQg',
                'price' => 650000,
                'created_at' => now(),
                'updated_at' => now(),
            ],





            [
                'id_photographer' => 21,
                'name_style' => 'Chụp ảnh phong cảnh',
                'description' => 'Là thể loại chụp ảnh những cảnh đẹp của thiên nhiên.',
                'image' => 'https://statictuoitre.mediacdn.vn/thumb_w/640/2017/12-1512755474968.jpg',
                'price' => 300000,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id_photographer' => 21,
                'name_style' => 'Chụp ảnh dã ngoại',
                'description' => 'Là thể loại chụp ảnh dã ngoại.',
                'image' => 'https://lh3.googleusercontent.com/proxy/qIMvIzUMgrPgsgUz8WrXVhndV5r2n2KlmHpruhNzHd6jYocSCVezXSJUiiEMqyyxScAcPK4WTl23YCHLmyZ9xW1_w8IvPHU4KlrrnWGQx80Y1HTfrryHsvr9_0PY-Wg0JQ',
                'price' => 350000,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id_photographer' => 21,
                'name_style' => 'Chụp ảnh quảng cáo',
                'description' => 'Là thể loại chụp ảnh để quảng cáo cho các nhãn hàng.',
                'image' => 'https://www.chupsanpham.net/wp-content/uploads/2017/09/huong-dan-cach-chup-anh-quang-cao-san-pham-my-pham-chat-lu-03.jpg',
                'price' => 700000,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id_photographer' => 21,
                'name_style' => 'Chụp ảnh đám cưới',
                'description' => 'Là thể loại chụp ảnh tại những đám cưới nhằm ghi lại khoảnh khắc đáng nhớ của cặp đôi.',
                'image' => 'https://tuarts.net/wp-content/uploads/2015/12/117937145_4255715104503639_2707126124250519806_o.jpg',
                'price' => 5000000,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id_photographer' => 21,
                'name_style' => 'Chụp ảnh các cặp đôi',
                'description' => 'Bức ảnh mang hiệu ứng trong sáng, thể hiện tình yêu đôi lứa.',
                'image' => 'https://i.pinimg.com/736x/27/ae/88/27ae88c582bbdb2a2196f69a07b2cca0.jpg',
                'price' => 650000,
                'created_at' => now(),
                'updated_at' => now(),
            ],




            [
                'id_photographer' => 22,
                'name_style' => 'Chụp ảnh phong cảnh',
                'description' => 'Là thể loại chụp ảnh những cảnh đẹp của thiên nhiên.',
                'image' => 'https://camerabox.vn/uploads/news/2018_11/chup-anh-thien-nhien-theo-mua-6.jpg',
                'price' => 300000,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id_photographer' => 22,
                'name_style' => 'Chụp ảnh dã ngoại',
                'description' => 'Là thể loại chụp ảnh dã ngoại.',
                'image' => 'https://chupanhngoaicanh.net/wp-content/uploads/2016/06/chup-anh-ngoai-canh-me-va-be.jpg',
                'price' => 350000,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id_photographer' => 22,
                'name_style' => 'Chụp ảnh quảng cáo',
                'description' => 'Là thể loại chụp ảnh để quảng cáo cho các nhãn hàng.',
                'image' => 'https://studiovietnam.com/wp-content/uploads/2020/06/dich-vu-chup-anh-quang-cao-san-pham-03.jpg',
                'price' => 700000,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id_photographer' => 22,
                'name_style' => 'Chụp ảnh đám cưới',
                'description' => 'Là thể loại chụp ảnh tại những đám cưới nhằm ghi lại khoảnh khắc đáng nhớ của cặp đôi.',
                'image' => 'https://chupgiare.com/wp-content/uploads/2020/02/chup-anh-tiec-cuoi-quan-tan-binh-nha-hang-diamond-place-9.jpg',
                'price' => 5000000,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id_photographer' => 22,
                'name_style' => 'Chụp ảnh các cặp đôi',
                'description' => 'Bức ảnh mang hiệu ứng trong sáng, thể hiện tình yêu đôi lứa.',
                'image' => 'https://lovicouple.com/wp-content/uploads/2019/12/top-10-y-tuong-chup-anh-dep-trieu-like-cho-cac-cap-doi.jpg',
                'price' => 650000,
                'created_at' => now(),
                'updated_at' => now(),
            ],





            [
                'id_photographer' => 23,
                'name_style' => 'Chụp ảnh phong cảnh',
                'description' => 'Là thể loại chụp ảnh những cảnh đẹp của thiên nhiên.',
                'image' => 'https://lbm.vn/wp-content/uploads/2012/12/canhdep3.jpg',
                'price' => 300000,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id_photographer' => 23,
                'name_style' => 'Chụp ảnh dã ngoại',
                'description' => 'Là thể loại chụp ảnh dã ngoại.',
                'image' => 'https://cf.shopee.vn/file/a0c44ab2e069956013f9fc4174c47282',
                'price' => 350000,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id_photographer' => 23,
                'name_style' => 'Chụp ảnh quảng cáo',
                'description' => 'Là thể loại chụp ảnh để quảng cáo cho các nhãn hàng.',
                'image' => 'https://alohastudio.vn/wp-content/uploads/2017/07/chup-anh-quang-cao-san-pham.jpg',
                'price' => 700000,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id_photographer' => 23,
                'name_style' => 'Chụp ảnh đám cưới',
                'description' => 'Là thể loại chụp ảnh tại những đám cưới nhằm ghi lại khoảnh khắc đáng nhớ của cặp đôi.',
                'image' => 'https://nicolebridal.vn/wp-content/uploads/2020/07/hinh-cuoi-de-cong-dep.jpg',
                'price' => 5000000,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id_photographer' => 23,
                'name_style' => 'Chụp ảnh các cặp đôi',
                'description' => 'Bức ảnh mang hiệu ứng trong sáng, thể hiện tình yêu đôi lứa.',
                'image' => 'https://hidanz.com/wp-content/uploads/2020/10/chup-hinh-au-yem1.jpg',
                'price' => 650000,
                'created_at' => now(),
                'updated_at' => now(),
            ],



            [
                'id_photographer' => 24,
                'name_style' => 'Chụp ảnh phong cảnh',
                'description' => 'Là thể loại chụp ảnh những cảnh đẹp của thiên nhiên.',
                'image' => 'https://lbm.vn/wp-content/uploads/2012/12/canhdep1.jpg',
                'price' => 300000,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id_photographer' => 24,
                'name_style' => 'Chụp ảnh dã ngoại',
                'description' => 'Là thể loại chụp ảnh dã ngoại.',
                'image' => 'https://chupanhvn.s3.ap-southeast-1.amazonaws.com/wp-content/uploads/2017/09/23032658/chup-anh-da-ngoai1-564x620.jpg',
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
                'image' => 'https://mocwedding.com/wp-content/uploads/2019/10/chup-quang-cao.jpg',
                'price' => 5000000,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id_photographer' => 24,
                'name_style' => 'Chụp ảnh các cặp đôi',
                'description' => 'Bức ảnh mang hiệu ứng trong sáng, thể hiện tình yêu đôi lứa.',
                'image' => 'https://aphoto.vn/wp-content/uploads/2019/03/hinh3-1.jpg',
                'price' => 650000,
                'created_at' => now(),
                'updated_at' => now(),
            ],




            [
                'id_photographer' => 25,
                'name_style' => 'Chụp ảnh phong cảnh',
                'description' => 'Là thể loại chụp ảnh những cảnh đẹp của thiên nhiên.',
                'image' => 'https://rgb.vn/wp-content/uploads/2014/08/RGB_vn_smallman28.jpg',
                'price' => 300000,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id_photographer' => 25,
                'name_style' => 'Chụp ảnh dã ngoại',
                'description' => 'Là thể loại chụp ảnh dã ngoại.',
                'image' => 'https://lh3.googleusercontent.com/proxy/yGWCDi0Z8eB393tVogd2cglNqjP49rkGQ2t1TjF4P6WHVA36bdQjkZThKXQ7Q1vyiRQwIcYEXVUZ5gMJwwdF2qLC-PMIhk1siLGsT1ZTV4RDA29mq5aT8Q_bk0U4d7ubsesGnWtERNAC5msyJ_ru',
                'price' => 350000,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id_photographer' => 25,
                'name_style' => 'Chụp ảnh quảng cáo',
                'description' => 'Là thể loại chụp ảnh để quảng cáo cho các nhãn hàng.',
                'image' => 'https://solution.com.vn/upload_images/images/2017-tin-tuc/Chup-anh-quang-cao-san-pham-v%C6%A1i-mau-chuyen-nghiep/mau-chup-anh-quang-cao-san-pham-1.jpg',
                'price' => 700000,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id_photographer' => 25,
                'name_style' => 'Chụp ảnh đám cưới',
                'description' => 'Là thể loại chụp ảnh tại những đám cưới nhằm ghi lại khoảnh khắc đáng nhớ của cặp đôi.',
                'image' => 'https://ahihistudio.vn/wp-content/uploads/2019/12/top-20-studio-chup-anh-cuoi-dep-nhat-viet-nam-hinh-anh-minh-hoa.jpg',
                'price' => 5000000,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id_photographer' => 25,
                'name_style' => 'Chụp ảnh các cặp đôi',
                'description' => 'Bức ảnh mang hiệu ứng trong sáng, thể hiện tình yêu đôi lứa.',
                'image' => 'https://mediaaks.com/wp-content/uploads/2018/03/dich-vu-chup-anh-couple-gia-re-tai-ha-noi1-2-1024x683-1024x683.jpg',
                'price' => 650000,
                'created_at' => now(),
                'updated_at' => now(),
            ],



            [
                'id_photographer' => 26,
                'name_style' => 'Chụp ảnh phong cảnh',
                'description' => 'Là thể loại chụp ảnh những cảnh đẹp của thiên nhiên.',
                'image' => 'https://mai.wedding/wp-content/uploads/2019/09/xu-huong-chup-anh-cuoi-thoi-4.0-Khi-b%E1%BB%A9c-%E1%BA%A3nh-kh%C3%B4ng-c%C3%B2n-c%E1%BB%A9ng-nh%E1%BA%AFc-21.jpg',
                'price' => 300000,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id_photographer' => 26,
                'name_style' => 'Chụp ảnh dã ngoại',
                'description' => 'Là thể loại chụp ảnh dã ngoại.',
                'image' => 'https://i.pinimg.com/564x/7a/35/f0/7a35f0d0ffdb3ade86d981267c2c2b2d.jpg',
                'price' => 350000,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id_photographer' => 26,
                'name_style' => 'Chụp ảnh quảng cáo',
                'description' => 'Là thể loại chụp ảnh để quảng cáo cho các nhãn hàng.',
                'image' => 'https://studiovietnam.com/wp-content/uploads/2020/10/cach-tao-dang-chup-anh-quang-cao-my-pham-chuyen-nghiep-1.jpg',
                'price' => 700000,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id_photographer' => 26,
                'name_style' => 'Chụp ảnh đám cưới',
                'description' => 'Là thể loại chụp ảnh tại những đám cưới nhằm ghi lại khoảnh khắc đáng nhớ của cặp đôi.',
                'image' => 'https://toplist.vn/images/800px/studio-chup-anh-cuoi-dep-nhat-tai-thanh-pho-ho-chi-minh-284318.jpg',
                'price' => 5000000,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id_photographer' => 26,
                'name_style' => 'Chụp ảnh các cặp đôi',
                'description' => 'Bức ảnh mang hiệu ứng trong sáng, thể hiện tình yêu đôi lứa.',
                'image' => 'https://chupanhvn.s3.ap-southeast-1.amazonaws.com/wp-content/uploads/2018/02/02093538/anh-couple-5.jpg',
                'price' => 650000,
                'created_at' => now(),
                'updated_at' => now(),
            ],




            [
                'id_photographer' => 27,
                'name_style' => 'Chụp ảnh phong cảnh',
                'description' => 'Là thể loại chụp ảnh những cảnh đẹp của thiên nhiên.',
                'image' => 'https://i.pinimg.com/originals/0f/f7/6a/0ff76a3c65ab46ab9d2129462e7a1b96.jpg',
                'price' => 300000,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id_photographer' => 27,
                'name_style' => 'Chụp ảnh dã ngoại',
                'description' => 'Là thể loại chụp ảnh dã ngoại.',
                'image' => 'https://frezo.net/wp-content/uploads/2020/11/Buoi-chup-da-ngoai-cua-suti-va-meomeo-02-1024x683.jpg',
                'price' => 350000,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id_photographer' => 27,
                'name_style' => 'Chụp ảnh quảng cáo',
                'description' => 'Là thể loại chụp ảnh để quảng cáo cho các nhãn hàng.',
                'image' => 'https://i2.wp.com/thue-studio.com/wp-content/uploads/2018/10/dich-vu-chup-anh-quang-cao.jpg?fit=1200%2C800&ssl=1',
                'price' => 700000,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id_photographer' => 27,
                'name_style' => 'Chụp ảnh đám cưới',
                'description' => 'Là thể loại chụp ảnh tại những đám cưới nhằm ghi lại khoảnh khắc đáng nhớ của cặp đôi.',
                'image' => 'https://mai.wedding/wp-content/uploads/2019/06/viet-bang-thao-vy-22.jpg',
                'price' => 5000000,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id_photographer' => 27,
                'name_style' => 'Chụp ảnh các cặp đôi',
                'description' => 'Bức ảnh mang hiệu ứng trong sáng, thể hiện tình yêu đôi lứa.',
                'image' => 'https://lh3.googleusercontent.com/proxy/i01Vjnvql2dfSl5eDR0jsnwi9xsHpaYSClQWvYMGroQKBG7HSRu9vZLPX-qPMVu9WMrwMbvW_ykpiZqWrt5KsRZ6hCQejdzdkUOHVMa-wUTIDSQ',
                'price' => 650000,
                'created_at' => now(),
                'updated_at' => now(),
            ],




            [
                'id_photographer' => 28,
                'name_style' => 'Chụp ảnh phong cảnh',
                'description' => 'Là thể loại chụp ảnh những cảnh đẹp của thiên nhiên.',
                'image' => 'https://www.taidanang.com/wp-content/uploads/2018/10/bat-mi-5-dia-diem-check-in-o-da-nang-hot-nhat-2018-22.jpg',
                'price' => 300000,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id_photographer' => 28,
                'name_style' => 'Chụp ảnh dã ngoại',
                'description' => 'Là thể loại chụp ảnh dã ngoại.',
                'image' => 'http://3.bp.blogspot.com/-telhNX52E6A/VdAJd1gMZlI/AAAAAAAAAW8/RDj3ndYonlg/s1600/cach-tao-dang-chup-anh-ngoai-canh-dep-nhat-cho-be%2B%25282%2529.jpg',
                'price' => 350000,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id_photographer' => 28,
                'name_style' => 'https://studiovietnam.com/wp-content/uploads/2020/06/dich-vu-chup-anh-quang-cao-my-pham-03.jpg',
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
                'image' => 'https://boongwedding.com/wp-content/uploads/2017/06/trao-mam-qua-cuoi-trong-dam-hoi-e1500433649766.jpg',
                'price' => 5000000,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id_photographer' => 28,
                'name_style' => 'Chụp ảnh các cặp đôi',
                'description' => 'Bức ảnh mang hiệu ứng trong sáng, thể hiện tình yêu đôi lứa.',
                'image' => 'https://chupanhvn.s3.ap-southeast-1.amazonaws.com/wp-content/uploads/2018/02/02082454/chup-anh-doi-5.jpg',
                'price' => 650000,
                'created_at' => now(),
                'updated_at' => now(),
            ],




            [
                'id_photographer' => 29,
                'name_style' => 'Chụp ảnh phong cảnh',
                'description' => 'Là thể loại chụp ảnh những cảnh đẹp của thiên nhiên.',
                'image' => 'https://sigo.vn/uploads/9/du-lieu-web/blog/sigo-hai-dang-tien-sa.jpg',
                'price' => 300000,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id_photographer' => 29,
                'name_style' => 'Chụp ảnh dã ngoại',
                'description' => 'Là thể loại chụp ảnh dã ngoại.',
                'image' => 'https://lh3.googleusercontent.com/proxy/UizAuR2SlXuZAx5gfSExzDXbYb0yQqf_InoDIJC8CxTPAxzIotJbYZn_LpRkbfcdpIx6dObk6hNKz4aJT59Ny49m0FWGUizwjUyQutl9VhdL7-Cv46fbd_Oeu5HEA1FEKLSk9lh9c8MpElE31MrVjN63dQ',
                'price' => 350000,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id_photographer' => 29,
                'name_style' => 'Chụp ảnh quảng cáo',
                'description' => 'Là thể loại chụp ảnh để quảng cáo cho các nhãn hàng.',
                'image' => 'https://cdn.vjshop.vn/tin-tuc/chup-anh-quang-cao-la-gi-va-goi-y-hay-cho-nguoi-moi/chup-anh-quang-cao-la-gi-11.jpg',
                'price' => 700000,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id_photographer' => 29,
                'name_style' => 'Chụp ảnh đám cưới',
                'description' => 'Là thể loại chụp ảnh tại những đám cưới nhằm ghi lại khoảnh khắc đáng nhớ của cặp đôi.',
                'image' => 'https://cdn.vjshop.vn/tin-tuc/chup-anh-quang-cao-la-gi-va-goi-y-hay-cho-nguoi-moi/chup-anh-quang-cao-la-gi-11.jpg',
                'price' => 5000000,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id_photographer' => 29,
                'name_style' => 'Chụp ảnh các cặp đôi',
                'description' => 'Bức ảnh mang hiệu ứng trong sáng, thể hiện tình yêu đôi lứa.',
                'image' => 'https://giaybom.com/image/bi-kip-chup-anh-cho-cap-doi-cuc-chat.jpg8030820201120011984.jpg',
                'price' => 650000,
                'created_at' => now(),
                'updated_at' => now(),
            ],



            [
                'id_photographer' => 30,
                'name_style' => 'Chụp ảnh phong cảnh',
                'description' => 'Là thể loại chụp ảnh những cảnh đẹp của thiên nhiên.',
                'image' => 'http://pystravel.vn/wp-content/uploads/2016/06/da-nang-pys-travel0131.jpg',
                'price' => 300000,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id_photographer' => 30,
                'name_style' => 'Chụp ảnh dã ngoại',
                'description' => 'Là thể loại chụp ảnh dã ngoại.',
                'image' => 'https://www.sgtiepthi.vn/wp-content/uploads/2020/08/image-21-630x420-1.jpg',
                'price' => 350000,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id_photographer' => 30,
                'name_style' => 'Chụp ảnh sự kiện',
                'description' => 'Chụp ảnh cho các sự kiện',
                'image' => 'https://lavenderstudio.vn/wp-content/uploads/word-image-87-900x754.jpeg',
                'price' => 700000,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id_photographer' => 30,
                'name_style' => 'Chụp ảnh đám cưới',
                'description' => 'Là thể loại chụp ảnh tại những đám cưới nhằm ghi lại khoảnh khắc đáng nhớ của cặp đôi.',
                'image' => 'http://www.marry.vn/wp-content/uploads/2015/03/20/chup-anh-cuoi-dep-can-mot-nguoi-biet-lang-nghe-va-thau-hieu.jpg',
                'price' => 5000000,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id_photographer' => 30,
                'name_style' => 'Chụp ảnh các cặp đôi',
                'description' => 'Bức ảnh mang hiệu ứng trong sáng, thể hiện tình yêu đôi lứa.',
                'image' => 'https://znews-photo.zadn.vn/w1024/Uploaded/zngure/2020_02_06/ba1.jpg',
                'price' => 650000,
                'created_at' => now(),
                'updated_at' => now(),
            ],




            [
                'id_photographer' => 31,
                'name_style' => 'Chụp ảnh phong cảnh',
                'description' => 'Là thể loại chụp ảnh những cảnh đẹp của thiên nhiên.',
                'image' => 'https://i1.wp.com/du-lich.net/wp-content/uploads/2019/08/Check-in-S%C6%A1n-Tr%C3%A0.jpg?resize=810%2C608&ssl=1',
                'price' => 300000,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id_photographer' => 31,
                'name_style' => 'Chụp ảnh dã ngoại',
                'description' => 'Là thể loại chụp ảnh dã ngoại.',
                'image' => 'https://travelsgcc.com/wp-content/uploads/2020/05/3-diem-check-in-dep-hoang-so-o-da-nang-2.jpg',
                'price' => 350000,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id_photographer' => 31,
                'name_style' => 'Chụp ảnh sự kiện',
                'description' => 'Là thể loại chụp ảnh để quảng cáo cho các nhãn hàng.',
                'image' => 'https://sankid.vn/wp-content/uploads/2019/09/chup-anh-thoi-noi-cho-be-SanKid-5.jpg',
                'price' => 700000,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id_photographer' => 31,
                'name_style' => 'Chụp ảnh đám cưới',
                'description' => 'Là thể loại chụp ảnh tại những đám cưới nhằm ghi lại khoảnh khắc đáng nhớ của cặp đôi.',
                'image' => 'https://blogphimanh.com/wp-content/uploads/2019/12/cac-kieu-chup-hinh-dam-hoi-2-2.jpg',
                'price' => 5000000,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id_photographer' => 31,
                'name_style' => 'Chụp ảnh các cặp đôi',
                'description' => 'Bức ảnh mang hiệu ứng trong sáng, thể hiện tình yêu đôi lứa.',
                'image' => 'https://aphoto.vn/wp-content/uploads/2019/03/avata-1.jpg',
                'price' => 650000,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
