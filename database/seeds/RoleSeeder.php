<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('role')->insert([

            [
                'role' => 'admin',
                'description' => 'Đây là người có mọi quyền truy cập tất cả các routes trong hệ thống'
            ],
            [
                'role' => 'user',
                'description' => 'Đây là một trong hai đối tượng của hệ thống, họ chỉ có quyền truy cập các routes dành cho user'
            ],
            [
                'role' => 'photographer',
                'description' => 'Đây là những người chụp ảnh, họ chỉ có quyền truy cập các routes dành cho photographer'
            ]
        ]);

    }
}
