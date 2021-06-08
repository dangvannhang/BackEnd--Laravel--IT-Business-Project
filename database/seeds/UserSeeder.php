<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;


class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('user')->insert([
            [
                'username' => 'piccine',
                'password' => Hash::make('password'),
                'email'    => 'piccine@gmail.com',
                'avatar' => 'https://cdn4.vectorstock.com/i/thumb-large/52/38/avatar-icon-vector-11835238.jpg',
                'first_name' => 'Piccine',
                'last_name' => 'Admin',
                'phone' => '0918203107',
                'address' => 'Tan Binh, HCM',
                'created_at' => '2021-01-01 09:00:00',
                'updated_at' => '2021-01-01 09:00:00',
            ],
            [
                'username' => 'myhanh11',
                'password' => Hash::make('password'),
                'email'    => 'buimyhanh11@gmail.com',
                'avatar' => 'https://i.pinimg.com/originals/01/48/0f/01480f29ce376005edcbec0b30cf367d.jpg',
                'first_name' => 'Hạnh',
                'last_name' => 'Bùi',
                'phone' => '0918203108',
                'address' => 'Tan Binh, HCM',
                'created_at' => '2021-02-25 09:00:00',
                'updated_at' => '2021-02-25 09:00:00',
            ],

            [
                'username' => 'vannhang',
                'password' => Hash::make('password'),
                
                'email'    => 'dangvaannhang124@gmail.com',
                'avatar' => 'https://scr.vn/wp-content/uploads/2020/07/h%C3%ACnh-n%E1%BB%81n-cute-5.jpg',
                'first_name' => 'Nhàng',
                'last_name' => 'Đặng',
                'phone' => '0918203109',
                'address' => 'Tan Binh, HCM',
                'created_at' => '2021-02-22 09:00:00',
                'updated_at' => '2021-02-22 09:00:00',
            ],
            [
                'username' => 'vuthuat',
                'password' => Hash::make('password'),
               
                'email'    => 'havuthuat99@gmail.com',
                'avatar' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRueErJaI-J4kzUBSmKWxyeosd4MhCGSFSzgg&usqp=CAU',
                'first_name' => 'Thuật',
                'last_name' => 'Hà',
                'phone' => '0918203110',
                'address' => 'Tan Binh, HCM',
                'created_at' => '2021-02-19 09:00:00',
                'updated_at' => '2021-02-19 09:00:00',
            ],
            [
                'username' => 'kieuchi22',
                'password' => Hash::make('password'),
               
                'email'    => 'lethikieuchi@gmail.com',
                'avatar' => 'https://cdn6.aptoide.com/imgs/9/e/9/9e9c999971201fff277dbf29f75fdaa5_icon.png',
                'first_name' => 'Chi',
                'last_name' => 'Phan',
               'phone' => '0918203111',
                'address' => 'Tan Binh, HCM',
                'created_at' => '2021-02-15 09:00:00',
                'updated_at' => '2021-02-15 09:00:00',
            ],
            [
                'username' => 'vanhung2k',
                'password' => Hash::make('password'),
               
                'email'    => 'vanhung2k@gmail.com',
                'avatar' => 'https://st2.depositphotos.com/5934840/12040/v/950/depositphotos_120409546-stock-illustration-superhero-avatar-superman-comic-design.jpg',
                'first_name' => 'Hùng',
                'last_name' => 'Nguyễn',
                'phone' => '0918203112',
                'address' => 'Tan Binh, HCM',
                'created_at' => '2021-02-12 09:00:00',
                'updated_at' => '2021-02-12 09:00:00',
            ],

            [
                'username' => 'couple12',
                'password' => Hash::make('password'),
               
                'email'    => 'chuaconguoiyeu@gmail.com',
                'avatar' => 'https://www.gamedesigning.org/wp-content/uploads/2016/12/Solid-Snake.png',
                'first_name' => 'Han',
                'last_name' => 'Chu',
                'phone' => '0918203113',
                'address' => 'Tan Binh, HCM',
                'created_at' => '2021-02-08 09:00:00',
                'updated_at' => '2021-02-08 09:00:00',
            ],
            [
                'username' => 'leanh127',
                'password' => Hash::make('password'),
               
                'email'    => 'leanh127@gmail.com',
                'avatar' => 'https://i.pinimg.com/originals/25/a9/15/25a915b52033609cdc542cee699f1c67.jpg',
                'first_name' => 'Anh',
                'last_name' => 'Lê',
                'phone' => '0918203114',
                'address' => 'Tan Binh, HCM',
                'created_at' => '2021-02-05 09:00:00',
                'updated_at' => '2021-02-05 09:00:00',
            ],
            [
                'username' => 'bigbaby',
                'password' => Hash::make('password'),
               
                'email'    => 'hohoaianh@gmail.com',
                'avatar' => 'https://ugc.futurelearn.com/uploads/images/dd/07/header_dd07fced-95f4-47dd-ae45-3341001ed0d5.jpg',
                'first_name' => 'Anh',
                'last_name' => 'Hồ',
                'phone' => '09182031115',
                'address' => 'Tan Binh, HCM',
                'created_at' => '2021-02-03 09:00:00',
                'updated_at' => '2021-02-03 09:00:00',
            ],
            [
                'username' => 'spud',
                'password' => Hash::make('password'),
               
                'email'    => 'duchuy2k@gmail.com',
                'avatar' => 'https://pbs.twimg.com/profile_images/809104288551145472/nt4OOa05_400x400.jpg',
                'first_name' => 'Huy',
                'last_name' => 'Nguyễn',
               'phone' => '0918203116',
                'address' => 'Tan Binh, HCM',
                'created_at' => '2021-01-02 09:00:00',
                'updated_at' => '2021-01-02 09:00:00',
            ],
            [
                'username' => 'snake',
                'password' => Hash::make('password'),
               
                'email'    => 'lehoaianh167@gmail.com',
                'avatar' => 'https://minara.net/blog/wp-content/uploads/2019/10/Kinh-ho%C3%A0ng-tr%C6%B0%E1%BB%9Bc-th%E1%BB%A7-%C4%91o%E1%BA%A1n-m%E1%BB%9Bi-c%E1%BB%A7a-hacker-nh%E1%BA%B1m-chi%E1%BA%BFm-l%E1%BA%A5y-m%C3%A3-OTP-ng%C3%A2n-h%C3%A0ng-minara.net-1.png',
                'first_name' => 'Anh',
                'last_name' => 'Lê',
                'phone' => '0918203117',
                'address' => 'Tan Binh, HCM',
                'created_at' => '2021-01-05 09:00:00',
                'updated_at' => '2021-01-05 09:00:00',
            ],
            [
                'username' => 'smokin',
                'password' => Hash::make('password'),
               
                'email'    => 'huyle97@gmail.com',
                'avatar' => 'https://thuviendohoa.vn/upload/images/items/hinh-anh-cau-thu-bong-da-sut-vo-le-png-448.webp',
                'first_name' => 'Huy',
                'last_name' => 'Lê',
                'phone' => '0918203118',
                'address' => 'Tan Binh, HCM',
                'created_at' => '2021-01-10 09:00:00',
                'updated_at' => '2021-01-10 09:00:00',
            ],
            [
                'username' => 'shogun',
                'password' => Hash::make('password'),
               
                'email'    => 'gia.tran235@gmail.com',
                'avatar' => 'https://i.pinimg.com/originals/eb/2c/7a/eb2c7a39b3f38fd8640f6047600ac2ef.jpg',
                'first_name' => 'Trân',
                'last_name' => 'Lê',
                 'phone' => '0918203119',
                'address' => 'Tan Binh, HCM',
                'created_at' => '2021-01-15 09:00:00',
                'updated_at' => '2021-01-15 09:00:00',
            ],
            [
                'username' => 'fanUI',
                'password' => Hash::make('password'),
               
                'email'    => 'lenhatran2k@gmail.com',
                'avatar' => 'https://qph.fs.quoracdn.net/main-qimg-afab7fe7b541952df9624daf9f5202e0',
                'first_name' => 'Trân',
                'last_name' => 'Nhã',
               'phone' => '0918203120',
                'address' => 'Tan Binh, HCM',
                'created_at' => '2021-01-18 09:00:00',
                'updated_at' => '2021-01-18 09:00:00',
            ],
            [
                'username' => 'chedaudo',
                'password' => Hash::make('password'),
               
                'email'    => 'chedaudo96@gmail.com',
                'avatar' => 'https://img5.goodfon.com/wallpaper/nbig/7/a6/hero-wars-khroniki-khaosa-liuter-personazh-igra-rpg-game.jpg',
                'first_name' => 'Nhã',
                'last_name' => 'My',
                 'phone' => '0918203121',
                'address' => 'Tan Binh, HCM',
                'created_at' => '2021-01-20 09:00:00',
                'updated_at' => '2021-01-20 09:00:00',
            ],
            [
                'username' => 'pikachu',
                'password' => Hash::make('password'),
               
                'email'    => 'hanh.tran34@gmail.com',
                'avatar' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTSJPzuc0qoqvK-iK3Mti4PJgLz3jUk8RElYw&usqp=CAU',
                'first_name' => 'Hạnh',
                'last_name' => 'Trần',
                'phone' => '0918203122',
                'address' => 'Tan Binh, HCM',
                'created_at' => '2021-01-22 09:00:00',
                'updated_at' => '2021-01-22 09:00:00',
            ],





            [
                'username' => 'lamthanhtung',
                'password' => Hash::make('password'),
               
                'email'    => 'lamthanhtung@gmail.com',
                'avatar' => 'https://specials-images.forbesimg.com/imageserve/5febd10c5fcbfae2bd93bab4/960x0.jpg?cropX1=0&cropX2=7952&cropY1=404&cropY2=5304',
                'first_name' => 'Tùng',
                'last_name' => 'Lâm',
                'phone' => '0918203123',
                'address' => 'Son Tra, Da Nang',
                'created_at' => '2021-01-18 09:00:00',
                'updated_at' => '2021-01-18 09:00:00',
            ],
            [
                'username' => 'vansi97',
                'password' => Hash::make('password'),
               
                'email'    => 'vansi97@gmail.com',
                'avatar' => 'https://anhducdigital.vn/media/news/0506_visaonhiepanhgiakhongduaanhgocchoban.jpg',
                'first_name' => 'Sĩ',
                'last_name' => 'Nguyễn',
                'phone' => '0918203124',
                'address' => 'Tan Binh, HCM',
                'created_at' => '2021-01-15 09:00:00',
                'updated_at' => '2021-01-15 09:00:00',
            ],
            [
                'username' => 'vanhung35',
                'password' => Hash::make('password'),
                
                'email'    => 'vanhung35@gmail.com',
                'avatar' => 'https://www.vivosmartphone.vn/uploads/MANGOADS/Selfie%20nam/XOFCCdY.jpg',
                'first_name' => 'Hùng',
                'last_name' => 'Nguyễn',
                 'phone' => '0918203125',
                'address' => 'Sơn Trà, Đà Nẵng',
                'created_at' => '2021-01-09 09:00:00',
                'updated_at' => '2021-01-09 09:00:00',
            ],
            [
                'username' => 'lequoc',
                'password' => Hash::make('password'),
               
                'email'    => 'lequoc@gmail.com',
                'avatar' => 'https://sadesign.vn/wp-content/uploads/2020/11/kieu-chup-anh-dep-cho-nam-o-bai-bien.jpg',
                'first_name' => 'Quốc',
                'last_name' => 'Lê',
                'phone' => '0918203126',
                'address' => 'Tan Binh, HCM',
                'created_at' => '2021-01-08 09:00:00',
                'updated_at' => '2021-01-08 09:00:00',
            ],


            [
                'username' => 'minhtien',
                'password' => Hash::make('password'),
               
                'email'    => 'minhtien@gmail.com',
                'avatar' => 'https://sohanews.sohacdn.com/thumb_w/660/160588918557773824/2020/6/17/img0096-1592366363868430058761.jpeg',
                'first_name' => 'Tiến',
                'last_name' => 'Hồ',
                'phone' => '0918203127',
                'address' => 'Tan Binh, HCM',
                'created_at' => '2021-01-05 09:00:00',
                'updated_at' => '2021-01-05 09:00:00',
            ],
            [
                'username' => 'dinhtri',
                'password' => Hash::make('password'),
               
                'email'    => 'dinhtri@gmail.com',
                'avatar' => 'https://trungdan.com/wp-content/uploads/2018/06/Top-10-kieu-tao-dang-chup-hinh-danh-cho-nam-dung-chat-9.jpg',
                'first_name' => 'Trí',
                'last_name' => 'Trần',
                'phone' => '0918203128',
                'address' => 'Tan Binh, HCM',
                'created_at' => '2021-01-02 09:00:00',
                'updated_at' => '2021-01-02 09:00:00',
            ],
            [
                'username' => 'vandinh',
                'password' => Hash::make('password'),
               
                'email'    => 'vandinh@gmail.com',
                'avatar' => 'https://www.vivosmartphone.vn/uploads/MANGOADS/Selfie%20n%E1%BB%AF/nam%20%C4%91a%20phong%20c%C3%A1ch/3.jpg',
                'first_name' => 'Định',
                'last_name' => 'Nguyễn',
                'phone' => '0918203129',
                'address' => 'Tan Binh, HCM',
                'created_at' => '2021-02-28 09:00:00',
                'updated_at' => '2021-02-28 09:00:00',
            ],
            [
                'username' => 'vannhang',
                'password' => Hash::make('password'),
               
                'email'    => 'vannhang@gmail.com',
                'avatar' => 'https://nhatthucmedia.com/images_upload/ac4469b300e9fcb7a5f8.jpg',
                'first_name' => 'Nhàng',
                'last_name' => 'Đặng',
                'phone' => '0918203130',
                'address' => 'Tan Binh, HCM',
                'created_at' => '2021-02-27 09:00:00',
                'updated_at' => '2021-02-27 09:00:00',
            ],
            [
                'username' => 'hongmy',
                'password' => Hash::make('password'),
               
                'email'    => 'hongmy@gmail.com',
                'avatar' => 'https://bazantravel.com/cdn/medias/uploads/51/51731-dia-diem-check-in-da-lat-700x569.jpg',
                'first_name' => 'My',
                'last_name' => 'Hà',
                'phone' => '0918203131',
                'address' => 'Tan Binh, HCM',
                'created_at' => '2021-02-25 09:00:00',
                'updated_at' => '2021-02-25 09:00:00',
            ],

            
            [
                'username' => 'saigon',
                'password' => Hash::make('password'),
               
                'email'    => 'chupanhsaigon@gmail.com',
                'avatar' => 'https://innotour.vn/wp-content/uploads/2017/08/18198578_732413156962359_547708168768629159_n.jpg',
                'first_name' => 'Nhất',
                'last_name' => 'Trần',
                'phone' => '0918203132',
                'address' => 'Tan Binh, HCM',
                'created_at' => '2021-02-23 09:00:00',
                'updated_at' => '2021-02-23 09:00:00',
            ],
            [
                'username' => 'thanhsang',
                'password' => Hash::make('password'),
               
                'email'    => 'thanhsang@gmail.com',
                'avatar' => 'https://ocuaso.com/wp-content/uploads/2015/09/nghe-anh.jpg',
                'first_name' => 'Sang',
                'last_name' => 'Nguyễn',
                'phone' => '0918203133',
                'address' => 'Tan Binh, HCM',
                'created_at' => '2021-02-18 09:00:00',
                'updated_at' => '2021-02-18 09:00:00',
            ],
            [
                'username' => 'gialam',
                'password' => Hash::make('password'),
               
                'email'    => 'gialam@gmail.com',
                'avatar' => 'https://sohanews.sohacdn.com/2019/2/26/photo-1-15511711848442130762022.jpg',
                'first_name' => 'Lâm',
                'last_name' => 'Lê',
                'phone' => '0918203134',
                'address' => 'Tan Binh, HCM',
                'created_at' => '2021-02-20 09:00:00',
                'updated_at' => '2021-02-20 09:00:00',

            ],
            [
                'username' => 'hoanghoa',
                'password' => Hash::make('password'),
               
                'email'    => 'hoanghoastudio@gmail.com',
                'avatar' => 'https://i.bloganchoi.com/bloganchoi.com/wp-content/uploads/2020/08/nguyen-phuoc-nguyen11.jpg?fit=640%2C20000&quality=95&ssl=1',
                'first_name' => 'Hoa',
                'last_name' => 'Lê',
                'phone' => '0918203135',
                'address' => 'Tan Binh, HCM',
                'created_at' => '2021-02-16 09:00:00',
                'updated_at' => '2021-02-16 09:00:00',
            ],
            [
                'username' => 'duchoa',
                'password' => Hash::make('password'),
               
                'email'    => 'duchoa@gmail.com',
                'avatar' => 'https://nguoimauangel.com/wp-content/uploads/2016/10/14102184_1105259459555017_8077140966631371286_n.jpg',
                'first_name' => 'Hoa',
                'last_name' => 'Lê',
                'phone' => '0918203136',
                'address' => 'Tan Binh, HCM',
                'created_at' => '2021-02-11 09:00:00',
                'updated_at' => '2021-02-11 09:00:00',
            ],
            [
                'username' => 'tandat',
                'password' => Hash::make('password'),
               
                'email'    => 'tandat@gmail.com',
                'avatar' => 'https://toplist.vn/images/800px/hieu-anh-hoang-dung-318154.jpg',
                'first_name' => 'Đạt',
                'last_name' => 'Nguyễn',
                'phone' => '0918203137',
                'address' => 'Tan Binh, HCM',
                'created_at' => '2021-02-13 09:00:00',
                'updated_at' => '2021-02-13 09:00:00',
            ],












            // update thang 3

           
            //
            [
                'username' => 'thinguyet',
                'password' => Hash::make('password'),
                'email'    => 'thinguyet@gmail.com',
                'avatar' => 'https://cdn.iconscout.com/icon/free/png-512/boy-avatar-4-1129037.png',
                'first_name' => 'Nguyệt',
                'last_name' => 'Nguyễn Thị',
                'phone' => '0918203138',
                'address' => 'Tan Binh, HCM',
                'created_at' => '2021-03-02 09:00:00',
                'updated_at' => '2021-03-02 09:00:00',
            ],

            //
            [
                'username' => 'myvan',
                'password' => Hash::make('password'),
                'email'    => 'myvan@gmail.com',
                'avatar' => 'https://image.freepik.com/free-vector/smiling-girl-avatar_102172-32.jpg',
                'first_name' => 'Vân',
                'last_name' => 'Mai Thị',
                'phone' => '0918203139',
                'address' => 'Tan Binh, HCM',
                'created_at' => '2021-03-07 09:00:00',
                'updated_at' => '2021-03-07 09:00:00',
            ],
            //
            [
                'username' => 'nguyenmanh',
                'password' => Hash::make('password'),
                'email'    => 'nguyenmanh@gmail.com',
                'avatar' => 'https://previews.123rf.com/images/artinspiring/artinspiring1811/artinspiring181100743/127434465-portrait-of-young-man-beautiful-handsome-boy-avatar-guy-smiling-male-character-isolated-vector-illus.jpg',
                'first_name' => 'Mạnh',
                'last_name' => 'Nguyễn',
                'phone' => '0918203140',
                'address' => 'Đà Nẵng',
                'created_at' => '2021-03-08 09:00:00',
                'updated_at' => '2021-03-08 09:00:00',
            ],
            //
            [
                'username' => 'thimai',
                'password' => Hash::make('password'),
                'email'    => 'hothimaib@gmail.com',
                'avatar' => 'https://png.pngtree.com/png-clipart/20190906/original/pngtree-couple-avatar-girl-avatar-cartoon-cute-png-image_4567586.jpg',
                'first_name' => 'Mai',
                'last_name' => 'Ho Thi',
                'phone' => '0918203141',
                'address' => 'Son Tra, HCM',
                'created_at' => '2021-03-11 09:00:00',
                'updated_at' => '2021-03-11 09:00:00',
            ],

            //
            [
                'username' => 'thanhlong',
                'password' => Hash::make('password'),
                'email'    => 'nguyenthanlong@gmail.com',
                'avatar' => 'https://cdn.iconscout.com/icon/free/png-512/boy-avatar-4-1129037.png',
                'first_name' => 'Long',
                'last_name' => 'Nguyễn Thành',
                'phone' => '0918203142',
                'address' => 'Quận 1, HCM',
                'created_at' => '2021-03-13 09:00:00',
                'updated_at' => '2021-03-13 09:00:00',
            ],

            //
            [
                'username' => 'myhieu',
                'password' => Hash::make('password'),
                'email'    => 'hothimyhieu@gmail.com',
                'avatar' => 'https://image.freepik.com/free-vector/smiling-girl-avatar_102172-32.jpg',
                'first_name' => 'Hiệu',
                'last_name' => 'Hồ Thị Mỹ',
                'phone' => '0918203143',
                'address' => 'Hải Châu, Đà Nẵng',
                'created_at' => '2021-03-16 09:00:00',
                'updated_at' => '2021-03-16 09:00:00',
            ],
            //
            [
                'username' => 'tuyetngan',
                'password' => Hash::make('password'),
                'email'    => 'tranthituyetngan@gmail.com',
                'avatar' => 'https://i.pinimg.com/236x/95/c8/1b/95c81b3decf8e7a7542980a1be2742e5.jpg',
                'first_name' => 'Ngân',
                'last_name' => 'Trần Thị Tuyết',
                'phone' => '0918203144',
                'address' => 'Gò Vấp, HCM',
                'created_at' => '2021-03-18 09:00:00',
                'updated_at' => '2021-03-18 09:00:00',
            ],
            //
            [
                'username' => 'leminhquoc12',
                'password' => Hash::make('password'),
                'email'    => 'leminhquoc12@gmail.com',
                'avatar' => 'https://static.vecteezy.com/system/resources/thumbnails/001/503/756/small/boy-face-avatar-cartoon-free-vector.jpg',
                'first_name' => 'Quốc',
                'last_name' => 'Lê Minh',
                'phone' => '0918203145',
                'address' => 'Thủ Đức, HCM',
                'created_at' => '2021-03-23 09:00:00',
                'updated_at' => '2021-03-23 09:00:00',
            ],
            //
            [
                'username' => 'maithinga',
                'password' => Hash::make('password'),
                'email'    => 'maithinga13@gmail.com',
                'avatar' => 'https://images-na.ssl-images-amazon.com/images/I/81%2BniHG4tfL.png',
                'first_name' => 'Nga',
                'last_name' => 'Mai Thị',
                'phone' => '0918203146',
                'address' => 'Tan Binh, HCM',
                'created_at' => '2021-03-25 09:00:00',
                'updated_at' => '2021-03-25 09:00:00',
            ],
            //
            [
                'username' => 'nguyenthinga',
                'password' => Hash::make('password'),
                'email'    => 'nguyenthinga@gmail.com',
                'avatar' => 'https://previews.123rf.com/images/nikolaydzhi/nikolaydzhi1609/nikolaydzhi160900319/64778751-muslim-girl-avatar-arab-beautiful-woman-in-green-hijab-vector.jpg',
                'first_name' => 'Ngà',
                'last_name' => 'Nguyễn Thị',
                'phone' => '0918203147',
                'address' => 'Sơn Trà, Đà Nẵng',
                'created_at' => '2021-03-26 09:00:00',
                'updated_at' => '2021-03-26 09:00:00',
            ],
            //
            [
                'username' => 'vuthuat',
                'password' => Hash::make('password'),
                'email'    => 'havuthuat@gmail.com',
                'avatar' => 'https://i.pinimg.com/564x/49/60/32/496032fb38b76e5bc22f8eb1d4a5d9be.jpg',
                'first_name' => 'Thuật',
                'last_name' => 'Hà Vũ',
                'phone' => '0918203148',
                'address' => 'Sơn Trà, Đà Nẵng',
                'created_at' => '2021-03-28 09:00:00',
                'updated_at' => '2021-03-28 09:00:00',
            ],
            //
            [
                'username' => 'nguyentheanh',
                'password' => Hash::make('password'),
                'email'    => 'nguyentheanh@gmail.com',
                'avatar' => 'https://toppng.com/uploads/preview/cool-avatar-transparent-image-cool-boy-avatar-11562893383qsirclznyw.png',
                'first_name' => 'Anh',
                'last_name' => 'Nguyễn Thế',
                'phone' => '0918203149',
                'address' => 'Hải Châu, Đà Nẵng',
                'created_at' => '2021-03-28 09:00:00',
                'updated_at' => '2021-03-28 09:00:00',
            ],
            //
            [
                'username' => 'hothion',
                'password' => Hash::make('password'),
                'email'    => 'hothion@gmail.com',
                'avatar' => 'https://cdn0.iconfinder.com/data/icons/men-and-women-avatar-set-1/200/Avatar-05-512.png',
                'first_name' => 'On',
                'last_name' => 'Hồ Thị',
                'phone' => '0918203150',
                'address' => 'Thủ Đức, HCM',
                'created_at' => '2021-03-13 09:00:00',
                'updated_at' => '2021-03-13 09:00:00',
            ],
            //
            [
                'username' => 'thiyeu',
                'password' => Hash::make('password'),
                'email'    => 'hothiyeu@gmail.com',
                'avatar' => 'https://p4.pstatp.com/origin/pgc-image/f1c9162c75a94707a309cf8bf16c1f86.jpeg',
                'first_name' => 'Yêu',
                'last_name' => 'Hồ Thị',
                'phone' => '0918203151',
                'address' => 'Tan Binh, HCM',
                'created_at' => '2021-03-29 09:00:00',
                'updated_at' => '2021-03-29 09:00:00',
            ],
            //
            [
                'username' => 'ngocthao',
                'password' => Hash::make('password'),
                'email'    => 'nguyenngocthao@gmail.com',
                'avatar' => 'https://img.lovepik.com/element/40128/7461.png_860.png',
                'first_name' => 'Thao',
                'last_name' => 'Nguyễn Ngọc',
                'phone' => '0918203152',
                'address' => 'Tan Binh, HCM',
                'created_at' => '2021-03-30 09:00:00',
                'updated_at' => '2021-03-30 09:00:00',
            ],
            //
            [
                'username' => 'hothisim',
                'password' => Hash::make('password'),
                'email'    => 'hothisim@gmail.com',
                'avatar' => 'https://st3.depositphotos.com/3369547/12852/v/950/depositphotos_128525738-stock-illustration-woman-female-avatar-isolated.jpg',
                'first_name' => 'Sim',
                'last_name' => 'Hồ Thị',
                'phone' => '0918203153',
                'address' => 'Thủ Đức, HCM',
                'created_at' => '2021-03-31 09:00:00',
                'updated_at' => '2021-03-31 09:00:00',
            ],
            [
                'username' => 'hothichau',
                'password' => Hash::make('password'),
                'email'    => 'hothichau@gmail.com',
                'avatar' => 'https://thumbs.dreamstime.com/z/beauty-female-portrait-decorated-colorful-flowers-smiling-young-woman-avatar-girl-pink-hair-beauty-female-portrait-212338355.jpg',
                'first_name' => 'Châu',
                'last_name' => 'Hồ Thị',
                'phone' => '0918203154',
                'address' => 'Ngũ Hành Sơn, Đà Nẵng',
                'created_at' => '2021-03-31 09:00:00',
                'updated_at' => '2021-03-31 09:00:00',
            ],



            // update thang 4
            //
            [
                'username' => 'phamvanmanh',
                'password' => Hash::make('password'),
                'email'    => 'phamvanmanh@gmail.com',
                'avatar' => 'https://i.pinimg.com/736x/fb/01/c2/fb01c215685a9e9de15d3fc594e22a48.jpg',
                'first_name' => 'Mạnh',
                'last_name' => 'Phạm Văn',
                'phone' => '0918203155',
                'address' => 'Quảng Nam',
                'created_at' => '2021-04-03 09:00:00',
                'updated_at' => '2021-04-03 09:00:00',
            ],
            //
            [
                'username' => 'hominhtien',
                'password' => Hash::make('password'),
                'email'    => 'hominhtien@gmail.com',
                'avatar' => 'https://png.pngtree.com/png-clipart/20190903/original/pngtree-couple-boy-cute-avatar-png-image_4445471.jpg',
                'first_name' => 'Tiến',
                'last_name' => 'Hồ Minh',
                'phone' => '0918203156',
                'address' => 'Đà Nẵng',
                'created_at' => '2021-04-04 09:00:00',
                'updated_at' => '2021-04-04 09:00:00',
            ],
            //
            [
                'username' => 'nguyenthaihoang',
                'password' => Hash::make('password'),
                'email'    => 'nguyenthaihoang@gmail.com',
                'avatar' => 'https://png.pngtree.com/png-clipart/20190903/original/pngtree-520-valentine-s-day-boy-avatar-png-image_4445501.jpg',
                'first_name' => 'Hoàng',
                'last_name' => 'Nguyễn Thái',
                'phone' => '0918203157',
                'address' => 'Đà Nẵng',
                'created_at' => '2021-04-04 09:00:00',
                'updated_at' => '2021-04-04 09:00:00',
            ],
            //
            [
                'username' => 'lethituongvy',
                'password' => Hash::make('password'),
                'email'    => 'lethituongvy@gmail.com',
                'avatar' => 'https://i.pinimg.com/736x/0d/c4/dd/0dc4dd7b618b03fc50e90be2dc1ccace.jpg',
                'first_name' => 'Vy',
                'last_name' => 'Lê Thị Tường',
                'phone' => '0918203158',
                'address' => 'HCM',
                'created_at' => '2021-04-08 09:00:00',
                'updated_at' => '2021-04-08 09:00:00',
            ],
            //
            [
                'username' => 'nguyenthiphamnhu',
                'password' => Hash::make('password'),
                'email'    => 'ngueynthiphamnhu@gmail.com',
                'avatar' => 'http://www.melisendevector.com/images/Image/girl_avatar_preview_1364682002.jpg',
                'first_name' => 'Như',
                'last_name' => 'Nguyễn Thị Phạm',
                'phone' => '0918203159',
                'address' => 'Sài Gòn',
                'created_at' => '2021-04-09 09:00:00',
                'updated_at' => '2021-04-09 09:00:00',
            ],
            //
            [
                'username' => 'trancongdung',
                'password' => Hash::make('password'),
                'email'    => 'trancongdung@gmail.com',
                'avatar' => 'https://png.pngtree.com/png-clipart/20190906/original/pngtree-couple-avatar-boy-avatar-cartoon-cute-png-image_4566617.jpg',
                'first_name' => 'Dũng',
                'last_name' => 'Trần Công',
                'phone' => '0918203160',
                'address' => 'Đà Nẵng',
                'created_at' => '2021-04-12 09:00:00',
                'updated_at' => '2021-04-12 09:00:00',
            ],
            //
            [
                'username' => 'nguyenduyngoc',
                'password' => Hash::make('password'),
                'email'    => 'nguyenduyngoc@gmail.com',
                'avatar' => 'https://www.pngkit.com/png/detail/25-258694_cool-avatar-transparent-image-cool-boy-avatar.png',
                'first_name' => 'Ngọc',
                'last_name' => 'Nguyễn Duy',
                'phone' => '0918203161',
                'address' => 'Sài Gòn',
                'created_at' => '2021-04-14 09:00:00',
                'updated_at' => '2021-04-14 09:00:00',
            ],
            //
            [
                'username' => 'nguyenduyngoc',
                'password' => Hash::make('password'),
                'email'    => 'nguyenduyngoc@gmail.com',
                'avatar' => 'https://t3.ftcdn.net/jpg/02/45/28/14/360_F_245281469_8BxP6VT7st0gj6qNfLUVVq1UJt0NfFEd.jpg',
                'first_name' => 'Ngọc',
                'last_name' => 'Nguyễn Duy',
                'phone' => '0918203162',
                'address' => 'Đà Nẵng',
                'created_at' => '2021-04-15 09:00:00',
                'updated_at' => '2021-04-15 09:00:00',
            ],
            //
            [
                'username' => 'nguyenthihoanghuong',
                'password' => Hash::make('password'),
                'email'    => 'nguyenthihoanghuong@gmail.com',
                'avatar' => 'https://cdn2.iconfinder.com/data/icons/circle-avatars-1/128/050_girl_avatar_profile_woman_suit_student_officer-512.png',
                'first_name' => 'Hương',
                'last_name' => 'Nguyễn Thị Hoàng',
                'phone' => '0918203163',
                'address' => 'Đà Nẵng',
                'created_at' => '2021-04-18 09:00:00',
                'updated_at' => '2021-04-18 09:00:00',
            ],
            //
            [
                'username' => 'buihuuhiep',
                'password' => Hash::make('password'),
                'email'    => 'buihuuhiep@gmail.com',
                'avatar' => 'https://img.lovepik.com/free_png/28/79/96/62Z58PICF9880mckYCPyZ_PIC2018.png_860.png',
                'first_name' => 'Hiệp',
                'last_name' => 'Bùi Hữu',
                'phone' => '0918203164',
                'address' => 'Sài Gòn',
                'created_at' => '2021-04-19 09:00:00',
                'updated_at' => '2021-04-19 09:00:00',
            ],
            //
            [
                'username' => 'hovanquan',
                'password' => Hash::make('password'),
                'email'    => 'hovanquan@gmail.com',
                'avatar' => 'https://image.freepik.com/free-vector/avatar-smiling-boy-facial-expression-icon-isolated-from-white-background_102172-300.jpg',
                'first_name' => 'Quân',
                'last_name' => 'Hồ Văn',
                'phone' => '0918203165',
                'address' => 'Đà Nẵng',
                'created_at' => '2021-04-22 09:00:00',
                'updated_at' => '2021-04-22 09:00:00',
            ],
            //
            [
                'username' => 'tranthihuyentrang',
                'password' => Hash::make('password'),
                'email'    => 'tranthihuyentrang@gmail.com',
                'avatar' => 'https://previews.123rf.com/images/yanalesiuk/yanalesiuk1801/yanalesiuk180100137/93984775-cute-vector-girl-avatar-icon-happy-woman-with-red-lips-pretty.jpg',
                'first_name' => 'Trang',
                'last_name' => 'Trần Thị Huyền',
                'phone' => '0918203166',
                'address' => 'Sài Gòn',
                'created_at' => '2021-04-23 09:00:00',
                'updated_at' => '2021-04-23 09:00:00',
            ],
            //
            [
                'username' => 'hoangthidiu',
                'password' => Hash::make('password'),
                'email'    => 'hoangthidiu@gmail.com',
                'avatar' => 'https://avatarfiles.alphacoders.com/152/thumb-152197.png',
                'first_name' => 'Dịu',
                'last_name' => 'Hoàng Thị',
                'phone' => '0918203167',
                'address' => 'Đà Nẵng',
                'created_at' => '2021-04-25 09:00:00',
                'updated_at' => '2021-04-25 09:00:00',
            ],
            //
            [
                'username' => 'nguyenthitien',
                'password' => Hash::make('password'),
                'email'    => 'nguyenthitien@gmail.com',
                'avatar' => 'https://image.freepik.com/free-vector/young-smiling-woman-with-short-haircut-portrait-beautiful-brunette-avatar-happy-girl-smiles-avatar-social-networks-abstract-female-portrait-full-face-illustration-flat-style_276162-59.jpg',
                'first_name' => 'Tiên',
                'last_name' => 'Nguyễn Thị',
                'phone' => '0918203168',
                'address' => 'Đà Nẵng',
                'created_at' => '2021-04-29 09:00:00',
                'updated_at' => '2021-04-29 09:00:00',
            ],

            [
                'username' => 'nguyenvanhung',
                'password' => Hash::make('password'),
                'email'    => 'nguyenvanhung@gmail.com',
                'avatar' => 'https://cdn.statically.io/img/avatarfiles.alphacoders.com/193/193352.jpg',
                'first_name' => 'Hùng',
                'last_name' => 'Nguyễn Văn',
                'phone' => '0918203169',
                'address' => 'Đà Nẵng',
                'created_at' => '2021-04-30 09:00:00',
                'updated_at' => '2021-04-30 09:00:00',
            ],

            
            // update thang 5
            //
            [
                'username' => 'tule',
                'password' => Hash::make('password'),
                'email'    => 'tule@gmail.com',
                'avatar' => 'https://cdna.artstation.com/p/assets/images/images/023/112/880/large/tanatnan-kanlayakonnat-page-profile.jpg?1578141727',
                'first_name' => 'Tú',
                'last_name' => 'Lê',
                'phone' => '0918203170',
                'address' => 'Sài Gòn',
                'created_at' => '2021-05-02 09:00:00',
                'updated_at' => '2021-05-02 09:00:00',
            ],
            //
            [
                'username' => 'chaugiang',
                'password' => Hash::make('password'),
                'email'    => 'chaugiang@gmail.com',
                'avatar' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRwxzU5r5nPPRP5FiCwtiAvSAE78TvDdP6y3g&usqp=CAU',
                'first_name' => 'Giang',
                'last_name' => 'Châu',
                'phone' => '0918203171',
                'address' => 'Đà Nẵng',
                'created_at' => '2021-05-02 09:00:00',
                'updated_at' => '2021-05-02 09:00:00',
            ],
            //
            [
                'username' => 'lethinhi',
                'password' => Hash::make('password'),
                'email'    => 'lethinhi@gmail.com',
                'avatar' => 'https://wallpapercave.com/wp/wp7171957.jpg',
                'first_name' => 'Nhị',
                'last_name' => 'Lê Thị',
                'phone' => '0918203172',
                'address' => 'Sài Gòn',
                'created_at' => '2021-05-07 09:00:00',
                'updated_at' => '2021-05-07 09:00:00',
            ],
            //
            [
                'username' => 'nguyengiathinh',
                'password' => Hash::make('password'),
                'email'    => 'nguyengiathinh@gmail.com',
                'avatar' => 'https://png.pngtree.com/element_our/20190528/ourlarge/pngtree-520-boy-avatar-image_1153284.jpg',
                'first_name' => 'Thịnh',
                'last_name' => 'Nguyễn Gia',
                'phone' => '0918203173',
                'address' => 'Sài Gòn',
                'created_at' => '2021-05-08 09:00:00',
                'updated_at' => '2021-05-08 09:00:00',
            ],
            //
            [
                'username' => 'lethimaihoa',
                'password' => Hash::make('password'),
                'email'    => 'lethimaihoa@gmail.com',
                'avatar' => 'https://fiverr-res.cloudinary.com/images/q_auto,f_auto/gigs/131304884/original/190ac627bd2074add9e3281828ee8ac7ac725380/make-you-a-random-anime-girl-avatar.jpg',
                'first_name' => 'Hoa',
                'last_name' => 'Lê Thị Mai',
                'phone' => '0918203174',
                'address' => 'Đà Nẵng',
                'created_at' => '2021-05-11 09:00:00',
                'updated_at' => '2021-05-11 09:00:00',
            ],
            //
            [
                'username' => 'tranthilanghuong',
                'password' => Hash::make('password'),
                'email'    => 'tranthilanghuong@gmail.com',
                'avatar' => 'https://cdn.dribbble.com/users/486903/screenshots/6414995/artboard_4x.png?compress=1&resize=400x300',
                'first_name' => 'Hương',
                'last_name' => 'Trần Thị Lang',
                'phone' => '0918203175',
                'address' => 'Đà Nẵng',
                'created_at' => '2021-05-15 09:00:00',
                'updated_at' => '2021-05-15 09:00:00',
            ],
            //
            [
                'username' => 'huynhhuuduc',
                'password' => Hash::make('password'),
                'email'    => 'huynhhuuduc@gmail.com',
                'avatar' => 'https://pickaface.net/gallery/avatar/unr_handsomeboy_180407_1616_z233f.png',
                'first_name' => 'Đức',
                'last_name' => 'Huỳnh Hữu',
                'phone' => '0918203176',
                'address' => 'Sài Gòn',
                'created_at' => '2021-05-18 09:00:00',
                'updated_at' => '2021-05-18 09:00:00',
            ],
            //
            [
                'username' => 'buithihoa',
                'password' => Hash::make('password'),
                'email'    => 'buithihoa@gmail.com',
                'avatar' => 'https://i.pinimg.com/474x/82/ab/35/82ab3533ee71daf256f23c1ccf20ad6f.jpg',
                'first_name' => 'Hoa',
                'last_name' => 'Bùi Thị',
                'phone' => '0918203177',
                'address' => 'Đà Nẵng',
                'created_at' => '2021-05-19 09:00:00',
                'updated_at' => '2021-05-19 09:00:00',
            ],
            //
            [
                'username' => 'hongmy',
                'password' => Hash::make('password'),
                'email'    => 'hongmy@gmail.com',
                'avatar' => 'https://avatarfiles.alphacoders.com/103/103875.png',
                'first_name' => 'My',
                'last_name' => 'Trần Thị Hồng',
                'phone' => '0918203178',
                'address' => 'Sài Gòn',
                'created_at' => '2021-05-22 09:00:00',
                'updated_at' => '2021-05-22 09:00:00',
            ],
            //
            [
                'username' => 'linhnguyen',
                'password' => Hash::make('password'),
                'email'    => 'linhnguyen@gmail.com',
                'avatar' => 'https://static.vecteezy.com/system/resources/thumbnails/001/609/739/small/indian-girl-face-avatar-cartoon-free-vector.jpg',
                'first_name' => 'Linh',
                'last_name' => 'Nguyễn',
                'phone' => '0918203179',
                'address' => 'Sài Gòn',
                'created_at' => '2021-05-25 09:00:00',
                'updated_at' => '2021-05-25 09:00:00',
            ],
            //
            [
                'username' => 'ngahuynh',
                'password' => Hash::make('password'),
                'email'    => 'ngahuynh@gmail.com',
                'avatar' => 'https://2atstartup.com.au/wp-content/uploads/2019/05/girl-avatar.png',
                'first_name' => 'Nga',
                'last_name' => 'Huỳnh',
                'phone' => '0918203180',
                'address' => 'Đà Nẵng',
                'created_at' => '2021-05-27 09:00:00',
                'updated_at' => '2021-05-27 09:00:00',
            ],
            //
            [
                'username' => 'dangthuyhiep',
                'password' => Hash::make('password'),
                'email'    => 'dangthuyhiep@gmail.com',
                'avatar' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTBy8kakj2YrY4DjdhGpOBiH5SNk7tfp_jMoQ&usqp=CAU',
                'first_name' => 'Hiệp',
                'last_name' => 'Đặng Thúy',
                'phone' => '0918203181',
                'address' => 'Sài Gòn',
                'created_at' => '2021-05-29 09:00:00',
                'updated_at' => '2021-05-29 09:00:00',
            ],
            //
            [
                'username' => 'nguyenthithuhien',
                'password' => Hash::make('password'),
                'email'    => 'nguyenthithuhien@gmail.com',
                'avatar' => 'https://st2.depositphotos.com/3557671/11719/v/950/depositphotos_117198170-stock-illustration-girl-icon-flat-single-avatarpeople.jpg',
                'first_name' => 'Hiền',
                'last_name' => 'Nguyễn Thị Thu',
                'phone' => '0918203182',
                'address' => 'Sài Gòn',
                'created_at' => '2021-05-31 09:00:00',
                'updated_at' => '2021-05-31 09:00:00',
            ],




            // update thang 6
            //
            [
                'username' => 'nguyenlonghai',
                'password' => Hash::make('password'),
                'email'    => 'nguyenlonghai@gmail.com',
                'avatar' => 'https://image.freepik.com/free-vector/gamer-mascot-geek-boy-esports-logo-avatar-with-headphones-glasses-cartoon-character_8169-228.jpg',
                'first_name' => 'Hải',
                'last_name' => 'Nguyễn Long',
                'phone' => '0918203182',
                'address' => 'Sài Gòn',
                'created_at' => '2021-06-01 09:00:00',
                'updated_at' => '2021-06-01 09:00:00',
            ],
            //
            [
                'username' => 'huongtra',
                'password' => Hash::make('password'),
                'email'    => 'huongtra@gmail.com',
                'avatar' => 'https://www.pngitem.com/pimgs/m/521-5212279_transparent-avatar-png-cute-girl-png-cartoon-png.png',
                'first_name' => 'Hương',
                'last_name' => 'Trà',
                'phone' => '0918203183',
                'address' => 'Sài Gòn',
                'created_at' => '2021-06-01 12:00:00',
                'updated_at' => '2021-06-01 12:00:00',
            ],
            //
            [
                'username' => 'vonguyenphuchung',
                'password' => Hash::make('password'),
                'email'    => 'vonguyenphuchung@gmail.com',
                'avatar' => 'https://st2.depositphotos.com/5934840/11872/v/950/depositphotos_118723450-stock-illustration-boy-anime-male-manga-cartoon.jpg',
                'first_name' => 'Hưng',
                'last_name' => 'Võ Nguyễn Phúc',
                'phone' => '0918203184',
                'address' => 'Sài Gòn',
                'created_at' => '2021-06-03 12:00:00',
                'updated_at' => '2021-06-03 12:00:00',
            ],
            //
            [
                'username' => 'tritran',
                'password' => Hash::make('password'),
                'email'    => 'tritran@gmail.com',
                'avatar' => 'https://avatar-ex-swe.nixcdn.com/singer/cover/2016/11/18/9/4/a/2/1479470774623.jpg',
                'first_name' => 'Trí',
                'last_name' => 'Trần Đình',
                'phone' => '0918203185',
                'address' => 'Sài Gòn',
                'created_at' => '2021-06-04 16:00:00',
                'updated_at' => '2021-06-04 16:00:00',
            ],
            //
            [
                'username' => 'hovanlai',
                'password' => Hash::make('password'),
                'email'    => 'hovanlai@gmail.com',
                'avatar' => 'https://freesvg.org/img/comic-boy.png',
                'first_name' => 'Lại',
                'last_name' => 'Hồ Văn',
                'phone' => '0918203186',
                'address' => 'Đà Nẵng',
                'created_at' => '2021-06-05 16:00:00',
                'updated_at' => '2021-06-05 16:00:00',
            ],
            //
            [
                'username' => 'nguyenduchuy',
                'password' => Hash::make('password'),
                'email'    => 'nguyenduchuy@gmail.com',
                'avatar' => 'https://images.cdn3.stockunlimited.net/clipart/boy-avatar_1389813.jpg',
                'first_name' => 'Huy',
                'last_name' => 'Nguyễn Đức',
                'phone' => '0918203187',
                'address' => 'Đà Nẵng',
                'created_at' => '2021-06-06 16:00:00',
                'updated_at' => '2021-06-06 16:00:00',
            ],
            //
            [
                'username' => 'nguyenthanhsang',
                'password' => Hash::make('password'),
                'email'    => 'nguyenthanhsang@gmail.com',
                'avatar' => 'https://pht.qoo-static.com/2ZnlizMoW5x1butWvO4Ug22Jouc9t3xgWgtuL7PscUeC68Yf8ng_mA085PtGsQ1J1y4=w512',
                'first_name' => 'Sang',
                'last_name' => 'Nguyễn Thanh',
                'phone' => '0918203188',
                'address' => 'Sài Gòn',
                'created_at' => '2021-06-07 16:00:00',
                'updated_at' => '2021-06-07 16:00:00',
            ],
            //
            [
                'username' => 'tranthuyhang',
                'password' => Hash::make('password'),
                'email'    => 'tranthuyhang@gmail.com',
                'avatar' => 'https://www.alonefeed.com/wp-content/uploads/2020/11/122227298_104453068129354_3240590364181766455_n.jpg',
                'first_name' => 'Hằng',
                'last_name' => 'Trần Thúy',
                'phone' => '0918203189',
                'address' => 'Sài Gòn',
                'created_at' => '2021-06-08 16:00:00',
                'updated_at' => '2021-06-08 16:00:00',
            ],




        ]);
    }
}
