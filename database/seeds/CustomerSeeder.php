<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;



class CustomerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('customer')->insert([
            [
                'id_customer' => 2,
                'billing' => Str::random(10)
            ],
            [
                'id_customer' => 3,
                'billing' => Str::random(10)
            ],
            [
                'id_customer' => 4,
                'billing' => Str::random(10)
            ],
            [
                'id_customer' => 5,
                'billing' => Str::random(10)
            ],
            [
                'id_customer' => 6,
                'billing' => Str::random(10)
            ],
        ]);
    }
}
