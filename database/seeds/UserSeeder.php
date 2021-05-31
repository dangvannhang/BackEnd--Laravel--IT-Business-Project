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
                'avatar' => 'https://cdn4.vectorstock.com/i/thumb-large/52/38/avatar-icon-vector-11835238.jpg'
            ],
            [
                'username' => 'myhanh11',
                'password' => Hash::make('password'),
                'email'    => 'buimyhanh11@gmail.com',
                'avatar' => 'https://i.pinimg.com/originals/01/48/0f/01480f29ce376005edcbec0b30cf367d.jpg'
            ],

            [
                'username' => 'vannhang',
                'password' => Hash::make('password'),
                
                'email'    => 'dangvaannhang124@gmail.com',
                'avatar' => 'https://scr.vn/wp-content/uploads/2020/07/h%C3%ACnh-n%E1%BB%81n-cute-5.jpg'
            ],
            [
                'username' => 'vuthuat',
                'password' => Hash::make('password'),
               
                'email'    => 'havuthuat99@gmail.com',
                'avatar' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRueErJaI-J4kzUBSmKWxyeosd4MhCGSFSzgg&usqp=CAU'
            ],
            [
                'username' => 'kieuchi22',
                'password' => Hash::make('password'),
               
                'email'    => 'lethikieuchi@gmail.com',
                'avatar' => 'https://cdn6.aptoide.com/imgs/9/e/9/9e9c999971201fff277dbf29f75fdaa5_icon.png'
            ],
            [
                'username' => 'vanhung2k',
                'password' => Hash::make('password'),
               
                'email'    => 'vanhung2k@gmail.com',
                'avatar' => 'https://st2.depositphotos.com/5934840/12040/v/950/depositphotos_120409546-stock-illustration-superhero-avatar-superman-comic-design.jpg'
            ],

            [
                'username' => 'couple12',
                'password' => Hash::make('password'),
               
                'email'    => 'chuaconguoiyeu@gmail.com',
                'avatar' => 'https://www.gamedesigning.org/wp-content/uploads/2016/12/Solid-Snake.png'
            ],
            [
                'username' => 'leanh127',
                'password' => Hash::make('password'),
               
                'email'    => 'leanh127@gmail.com',
                'avatar' => 'https://i.pinimg.com/originals/25/a9/15/25a915b52033609cdc542cee699f1c67.jpg'
            ],
            [
                'username' => 'bigbaby',
                'password' => Hash::make('password'),
               
                'email'    => 'hohoaianh@gmail.com',
                'avatar' => 'https://ugc.futurelearn.com/uploads/images/dd/07/header_dd07fced-95f4-47dd-ae45-3341001ed0d5.jpg'
            ],
            [
                'username' => 'spud',
                'password' => Hash::make('password'),
               
                'email'    => 'duchuy2k@gmail.com',
                'avatar' => 'https://pbs.twimg.com/profile_images/809104288551145472/nt4OOa05_400x400.jpg'
            ],
            [
                'username' => 'snake',
                'password' => Hash::make('password'),
               
                'email'    => 'lehoaianh167@gmail.com',
                'avatar' => 'https://minara.net/blog/wp-content/uploads/2019/10/Kinh-ho%C3%A0ng-tr%C6%B0%E1%BB%9Bc-th%E1%BB%A7-%C4%91o%E1%BA%A1n-m%E1%BB%9Bi-c%E1%BB%A7a-hacker-nh%E1%BA%B1m-chi%E1%BA%BFm-l%E1%BA%A5y-m%C3%A3-OTP-ng%C3%A2n-h%C3%A0ng-minara.net-1.png'
            ],
            [
                'username' => 'smokin',
                'password' => Hash::make('password'),
               
                'email'    => 'huyle97@gmail.com',
                'avatar' => 'https://thuviendohoa.vn/upload/images/items/hinh-anh-cau-thu-bong-da-sut-vo-le-png-448.webp'
            ],
            [
                'username' => 'shogun',
                'password' => Hash::make('password'),
               
                'email'    => 'gia.tran235@gmail.com',
                'avatar' => 'https://i.pinimg.com/originals/eb/2c/7a/eb2c7a39b3f38fd8640f6047600ac2ef.jpg'
            ],
            [
                'username' => 'fanUI',
                'password' => Hash::make('password'),
               
                'email'    => 'lenhatran2k@gmail.com',
                'avatar' => 'https://qph.fs.quoracdn.net/main-qimg-afab7fe7b541952df9624daf9f5202e0'
            ],
            [
                'username' => 'chedaudo',
                'password' => Hash::make('password'),
               
                'email'    => 'chedaudo96@gmail.com',
                'avatar' => 'https://img5.goodfon.com/wallpaper/nbig/7/a6/hero-wars-khroniki-khaosa-liuter-personazh-igra-rpg-game.jpg'
            ],
            [
                'username' => 'pikachu',
                'password' => Hash::make('password'),
               
                'email'    => 'hanh.tran34@gmail.com',
                'avatar' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTSJPzuc0qoqvK-iK3Mti4PJgLz3jUk8RElYw&usqp=CAU'
            ],



            [
                'username' => 'lamthanhtung',
                'password' => Hash::make('password'),
               
                'email'    => 'lamthanhtung@gmail.com',
                'avatar' => 'https://specials-images.forbesimg.com/imageserve/5febd10c5fcbfae2bd93bab4/960x0.jpg?cropX1=0&cropX2=7952&cropY1=404&cropY2=5304'
            ],
            [
                'username' => 'vansi97',
                'password' => Hash::make('password'),
               
                'email'    => 'vansi97@gmail.com',
                'avatar' => 'https://anhducdigital.vn/media/news/0506_visaonhiepanhgiakhongduaanhgocchoban.jpg'
            ],
            [
                'username' => 'vanhung35',
                'password' => Hash::make('password'),
                
                'email'    => 'vanhung35@gmail.com',
                'avatar' => 'https://www.vivosmartphone.vn/uploads/MANGOADS/Selfie%20nam/XOFCCdY.jpg'
            ],
            [
                'username' => 'lequoc',
                'password' => Hash::make('password'),
               
                'email'    => 'lequoc@gmail.com',
                'avatar' => 'https://sadesign.vn/wp-content/uploads/2020/11/kieu-chup-anh-dep-cho-nam-o-bai-bien.jpg'
            ],


            [
                'username' => 'minhtien',
                'password' => Hash::make('password'),
               
                'email'    => 'minhtien@gmail.com',
                'avatar' => '../assets/Images/NAG/1.png'
            ],
            [
                'username' => 'dinhtri',
                'password' => Hash::make('password'),
               
                'email'    => 'dinhtri@gmail.com',
                'avatar' => 'https://trungdan.com/wp-content/uploads/2018/06/Top-10-kieu-tao-dang-chup-hinh-danh-cho-nam-dung-chat-9.jpg'
            ],
            [
                'username' => 'vandinh',
                'password' => Hash::make('password'),
               
                'email'    => 'vandinh@gmail.com',
                'avatar' => 'https://www.vivosmartphone.vn/uploads/MANGOADS/Selfie%20n%E1%BB%AF/nam%20%C4%91a%20phong%20c%C3%A1ch/3.jpg'
            ],
            [
                'username' => 'vannhang',
                'password' => Hash::make('password'),
               
                'email'    => 'vannhang@gmail.com',
                'avatar' => 'https://nhatthucmedia.com/images_upload/ac4469b300e9fcb7a5f8.jpg'
            ],
            [
                'username' => 'hongmy',
                'password' => Hash::make('password'),
               
                'email'    => 'hongmy@gmail.com',
                'avatar' => 'https://bazantravel.com/cdn/medias/uploads/51/51731-dia-diem-check-in-da-lat-700x569.jpg'
            ],

            
            [
                'username' => 'saigon',
                'password' => Hash::make('password'),
               
                'email'    => 'chupanhsaigon@gmail.com',
                'avatar' => 'https://innotour.vn/wp-content/uploads/2017/08/18198578_732413156962359_547708168768629159_n.jpg'
            ],
            [
                'username' => 'thanhsang',
                'password' => Hash::make('password'),
               
                'email'    => 'thanhsang@gmail.com',
                'avatar' => 'https://ocuaso.com/wp-content/uploads/2015/09/nghe-anh.jpg'
            ],
            [
                'username' => 'gialam',
                'password' => Hash::make('password'),
               
                'email'    => 'gialam@gmail.com',
                'avatar' => 'https://sohanews.sohacdn.com/2019/2/26/photo-1-15511711848442130762022.jpg'
            ],
            [
                'username' => 'hoanghoa',
                'password' => Hash::make('password'),
               
                'email'    => 'hoanghoastudio@gmail.com',
                'avatar' => 'https://i.bloganchoi.com/bloganchoi.com/wp-content/uploads/2020/08/nguyen-phuoc-nguyen11.jpg?fit=640%2C20000&quality=95&ssl=1'
            ],
            [
                'username' => 'duchoa',
                'password' => Hash::make('password'),
               
                'email'    => 'duchoa@gmail.com',
                'avatar' => 'https://nguoimauangel.com/wp-content/uploads/2016/10/14102184_1105259459555017_8077140966631371286_n.jpg'
            ],
            [
                'username' => 'tandat',
                'password' => Hash::make('password'),
               
                'email'    => 'tandat@gmail.com',
                'avatar' => 'https://lh3.googleusercontent.com/proxy/npihG3jjsx2dRnNMOVtUIcGeBYNh9lBLtj54Nk6ncCOJpu1jKGgEjDMpkIszP-ZHHMcmeBcPkmCmJnnggWanPNr6kVvrdbxvn0E-niQyHH7YQYYybj4'
            ],

        ]);
    }
}
