<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class BookingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('booking')->insert([
            [
                'id_user' => 2,
                'id_photographer' => 7,
                'id_combo' => 2,
                'is_cancel' => false,
                'code_voucher' => '',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id_user' => 3,
                'id_photographer' => 10,
                'id_combo' => 4,
                'is_cancel' => false,
                'code_voucher' => '',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id_user' => 4,
                'id_photographer' => 9,
                'id_combo' => 1,
                'is_cancel' => false,
                'code_voucher' => '',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id_user' => 5,
                'id_photographer' => 8,
                'id_combo' => 4,
                'is_cancel' => false,
                'code_voucher' => '',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id_user' => 6,
                'id_photographer' => 7,
                'id_combo' => 5,
                'is_cancel' => false,
                'code_voucher' => '',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id_user' => 3,
                'id_photographer' => 8,
                'id_combo' => 1,
                'is_cancel' => false,
                'code_voucher' => '',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id_user' => 5,
                'id_photographer' => 9,
                'id_combo' => 2,
                'is_cancel' => false,
                'code_voucher' => '',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id_user' => 6,
                'id_photographer' => 10,
                'id_combo' => 3,
                'is_cancel' => false,
                'code_voucher' => '',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id_user' => 2,
                'id_photographer' => 9,
                'id_combo' => 5,
                'is_cancel' => false,
                'code_voucher' => '',
                'created_at' => now(),
                'updated_at' => now()
            ],
        ]);
    }
}
