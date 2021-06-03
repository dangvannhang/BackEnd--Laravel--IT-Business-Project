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
            ],
            [
                'username' => 'myhanh11',
                'password' => Hash::make('password'),
                'email'    => 'buimyhanh11@gmail.com',
                'avatar' => 'https://i.pinimg.com/originals/01/48/0f/01480f29ce376005edcbec0b30cf367d.jpg',
                'first_name' => 'Hạnh',
                'last_name' => 'Bùi',
            ],

            [
                'username' => 'vannhang',
                'password' => Hash::make('password'),
                
                'email'    => 'dangvaannhang124@gmail.com',
                'avatar' => 'https://scr.vn/wp-content/uploads/2020/07/h%C3%ACnh-n%E1%BB%81n-cute-5.jpg',
                'first_name' => 'Nhàng',
                'last_name' => 'Đặng',
            ],
            [
                'username' => 'vuthuat',
                'password' => Hash::make('password'),
               
                'email'    => 'havuthuat99@gmail.com',
                'avatar' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRueErJaI-J4kzUBSmKWxyeosd4MhCGSFSzgg&usqp=CAU',
                'first_name' => 'Thuật',
                'last_name' => 'Hà',
            ],
            [
                'username' => 'kieuchi22',
                'password' => Hash::make('password'),
               
                'email'    => 'lethikieuchi@gmail.com',
                'avatar' => 'https://cdn6.aptoide.com/imgs/9/e/9/9e9c999971201fff277dbf29f75fdaa5_icon.png',
                'first_name' => 'Chi',
                'last_name' => 'Phan',
            ],
            [
                'username' => 'vanhung2k',
                'password' => Hash::make('password'),
               
                'email'    => 'vanhung2k@gmail.com',
                'avatar' => 'https://st2.depositphotos.com/5934840/12040/v/950/depositphotos_120409546-stock-illustration-superhero-avatar-superman-comic-design.jpg',
                'first_name' => 'Hùng',
                'last_name' => 'Nguyễn',
            ],

            [
                'username' => 'couple12',
                'password' => Hash::make('password'),
               
                'email'    => 'chuaconguoiyeu@gmail.com',
                'avatar' => 'https://www.gamedesigning.org/wp-content/uploads/2016/12/Solid-Snake.png',
                'first_name' => 'Han',
                'last_name' => 'Chu',
            ],
            [
                'username' => 'leanh127',
                'password' => Hash::make('password'),
               
                'email'    => 'leanh127@gmail.com',
                'avatar' => 'https://i.pinimg.com/originals/25/a9/15/25a915b52033609cdc542cee699f1c67.jpg',
                'first_name' => 'Anh',
                'last_name' => 'Lê',
            ],
            [
                'username' => 'bigbaby',
                'password' => Hash::make('password'),
               
                'email'    => 'hohoaianh@gmail.com',
                'avatar' => 'https://ugc.futurelearn.com/uploads/images/dd/07/header_dd07fced-95f4-47dd-ae45-3341001ed0d5.jpg',
                'first_name' => 'Anh',
                'last_name' => 'Hồ',
            ],
            [
                'username' => 'spud',
                'password' => Hash::make('password'),
               
                'email'    => 'duchuy2k@gmail.com',
                'avatar' => 'https://pbs.twimg.com/profile_images/809104288551145472/nt4OOa05_400x400.jpg',
                'first_name' => 'Huy',
                'last_name' => 'Nguyễn',
            ],
            [
                'username' => 'snake',
                'password' => Hash::make('password'),
               
                'email'    => 'lehoaianh167@gmail.com',
                'avatar' => 'https://minara.net/blog/wp-content/uploads/2019/10/Kinh-ho%C3%A0ng-tr%C6%B0%E1%BB%9Bc-th%E1%BB%A7-%C4%91o%E1%BA%A1n-m%E1%BB%9Bi-c%E1%BB%A7a-hacker-nh%E1%BA%B1m-chi%E1%BA%BFm-l%E1%BA%A5y-m%C3%A3-OTP-ng%C3%A2n-h%C3%A0ng-minara.net-1.png',
                'first_name' => 'Anh',
                'last_name' => 'Lê',
            ],
            [
                'username' => 'smokin',
                'password' => Hash::make('password'),
               
                'email'    => 'huyle97@gmail.com',
                'avatar' => 'https://thuviendohoa.vn/upload/images/items/hinh-anh-cau-thu-bong-da-sut-vo-le-png-448.webp',
                'first_name' => 'Huy',
                'last_name' => 'Lê',
            ],
            [
                'username' => 'shogun',
                'password' => Hash::make('password'),
               
                'email'    => 'gia.tran235@gmail.com',
                'avatar' => 'https://i.pinimg.com/originals/eb/2c/7a/eb2c7a39b3f38fd8640f6047600ac2ef.jpg',
                'first_name' => 'Trân',
                'last_name' => 'Lê',
            ],
            [
                'username' => 'fanUI',
                'password' => Hash::make('password'),
               
                'email'    => 'lenhatran2k@gmail.com',
                'avatar' => 'https://qph.fs.quoracdn.net/main-qimg-afab7fe7b541952df9624daf9f5202e0',
                'first_name' => 'Trân',
                'last_name' => 'Nhã',
            ],
            [
                'username' => 'chedaudo',
                'password' => Hash::make('password'),
               
                'email'    => 'chedaudo96@gmail.com',
                'avatar' => 'https://img5.goodfon.com/wallpaper/nbig/7/a6/hero-wars-khroniki-khaosa-liuter-personazh-igra-rpg-game.jpg',
                'first_name' => 'Nhã',
                'last_name' => 'My',
            ],
            [
                'username' => 'pikachu',
                'password' => Hash::make('password'),
               
                'email'    => 'hanh.tran34@gmail.com',
                'avatar' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTSJPzuc0qoqvK-iK3Mti4PJgLz3jUk8RElYw&usqp=CAU',
                'first_name' => 'Hạnh',
                'last_name' => 'Trần',
            ],



            [
                'username' => 'lamthanhtung',
                'password' => Hash::make('password'),
               
                'email'    => 'lamthanhtung@gmail.com',
                'avatar' => 'https://specials-images.forbesimg.com/imageserve/5febd10c5fcbfae2bd93bab4/960x0.jpg?cropX1=0&cropX2=7952&cropY1=404&cropY2=5304',
                'first_name' => 'Tùng',
                'last_name' => 'Lâm',
            ],
            [
                'username' => 'vansi97',
                'password' => Hash::make('password'),
               
                'email'    => 'vansi97@gmail.com',
                'avatar' => 'https://anhducdigital.vn/media/news/0506_visaonhiepanhgiakhongduaanhgocchoban.jpg',
                'first_name' => 'Sĩ',
                'last_name' => 'Nguyễn',
            ],
            [
                'username' => 'vanhung35',
                'password' => Hash::make('password'),
                
                'email'    => 'vanhung35@gmail.com',
                'avatar' => 'https://www.vivosmartphone.vn/uploads/MANGOADS/Selfie%20nam/XOFCCdY.jpg',
                'first_name' => 'Hùng',
                'last_name' => 'Nguyễn',
            ],
            [
                'username' => 'lequoc',
                'password' => Hash::make('password'),
               
                'email'    => 'lequoc@gmail.com',
                'avatar' => 'https://sadesign.vn/wp-content/uploads/2020/11/kieu-chup-anh-dep-cho-nam-o-bai-bien.jpg',
                'first_name' => 'Quốc',
                'last_name' => 'Lê',
            ],


            [
                'username' => 'minhtien',
                'password' => Hash::make('password'),
               
                'email'    => 'minhtien@gmail.com',
                'avatar' => 'https://sohanews.sohacdn.com/thumb_w/660/160588918557773824/2020/6/17/img0096-1592366363868430058761.jpeg',
                'first_name' => 'Tiến',
                'last_name' => 'Hồ',
            ],
            [
                'username' => 'dinhtri',
                'password' => Hash::make('password'),
               
                'email'    => 'dinhtri@gmail.com',
                'avatar' => 'https://trungdan.com/wp-content/uploads/2018/06/Top-10-kieu-tao-dang-chup-hinh-danh-cho-nam-dung-chat-9.jpg',
                'first_name' => 'Trí',
                'last_name' => 'Trần',
            ],
            [
                'username' => 'vandinh',
                'password' => Hash::make('password'),
               
                'email'    => 'vandinh@gmail.com',
                'avatar' => 'https://www.vivosmartphone.vn/uploads/MANGOADS/Selfie%20n%E1%BB%AF/nam%20%C4%91a%20phong%20c%C3%A1ch/3.jpg',
                'first_name' => 'Định',
                'last_name' => 'Nguyễn',
            ],
            [
                'username' => 'vannhang',
                'password' => Hash::make('password'),
               
                'email'    => 'vannhang@gmail.com',
                'avatar' => 'https://nhatthucmedia.com/images_upload/ac4469b300e9fcb7a5f8.jpg',
                'first_name' => 'Nhàng',
                'last_name' => 'Đặng',
            ],
            [
                'username' => 'hongmy',
                'password' => Hash::make('password'),
               
                'email'    => 'hongmy@gmail.com',
                'avatar' => 'https://bazantravel.com/cdn/medias/uploads/51/51731-dia-diem-check-in-da-lat-700x569.jpg',
                'first_name' => 'My',
                'last_name' => 'Hà',
            ],

            
            [
                'username' => 'saigon',
                'password' => Hash::make('password'),
               
                'email'    => 'chupanhsaigon@gmail.com',
                'avatar' => 'https://innotour.vn/wp-content/uploads/2017/08/18198578_732413156962359_547708168768629159_n.jpg',
                'first_name' => 'Nhất',
                'last_name' => 'Trần',
            ],
            [
                'username' => 'thanhsang',
                'password' => Hash::make('password'),
               
                'email'    => 'thanhsang@gmail.com',
                'avatar' => 'https://ocuaso.com/wp-content/uploads/2015/09/nghe-anh.jpg',
                'first_name' => 'Sang',
                'last_name' => 'Nguyễn',
            ],
            [
                'username' => 'gialam',
                'password' => Hash::make('password'),
               
                'email'    => 'gialam@gmail.com',
                'avatar' => 'https://sohanews.sohacdn.com/2019/2/26/photo-1-15511711848442130762022.jpg',
                'first_name' => 'Lâm',
                'last_name' => 'Lê',
            ],
            [
                'username' => 'hoanghoa',
                'password' => Hash::make('password'),
               
                'email'    => 'hoanghoastudio@gmail.com',
                'avatar' => 'https://i.bloganchoi.com/bloganchoi.com/wp-content/uploads/2020/08/nguyen-phuoc-nguyen11.jpg?fit=640%2C20000&quality=95&ssl=1',
                'first_name' => 'Hoa',
                'last_name' => 'Lê',
            ],
            [
                'username' => 'duchoa',
                'password' => Hash::make('password'),
               
                'email'    => 'duchoa@gmail.com',
                'avatar' => 'https://nguoimauangel.com/wp-content/uploads/2016/10/14102184_1105259459555017_8077140966631371286_n.jpg',
                'first_name' => 'Hoa',
                'last_name' => 'Lê',
            ],
            [
                'username' => 'tandat',
                'password' => Hash::make('password'),
               
                'email'    => 'tandat@gmail.com',
                'avatar' => 'https://toplist.vn/images/800px/hieu-anh-hoang-dung-318154.jpg',
                'first_name' => 'Đạt',
                'last_name' => 'Nguyễn',
            ],

        ]);
    }
}
