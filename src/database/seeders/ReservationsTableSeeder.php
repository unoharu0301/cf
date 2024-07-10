<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ReservationsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $param = [
            'user_id' => 2,
            'shop_name' => '牛助',
            'date' => '2024/4/1',
            'time' => '09:00',
            'reservation_number' => 2,
        ];
        DB::table('reservations')->insert($param);
    }
}
