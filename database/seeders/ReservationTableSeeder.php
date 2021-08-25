<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ReservationTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $param = [
            'id'=>'1',
            'shop_id'=>'1',
            'user_id'=>'1',
            'reservation_date'=>'2021-01-01',
            'reservation_time'=>'17:00:00',
            'reservation_number'=>'1',
        ];
        DB::table('reservations')->insert($param);
    }
}
