<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ReservesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $param = [
            'guest_id' => '1',
            'num_adults' => '3',
            'num_kids' => '2',
            'checkin' => '2022-11-03',
            'checkout' => '2022-11-04'
        ];
        DB::table('reserves')->insert($param);

        $param = [
            'guest_id' => '1',
            'num_adults' => '2',
            'num_kids' => '4',
            'checkin' => '2021-11-03',
            'checkout' => '2021-11-04'
        ];
        DB::table('reserves')->insert($param);

        $param = [
            'guest_id' => '2',
            'num_adults' => '1',
            'num_kids' => '4',
            'checkin' => '2022-12-04',
            'checkout' => '2022-12-07'
        ];
        DB::table('reserves')->insert($param);

        $param = [
            'guest_id' => '3',
            'num_adults' => '6',
            'num_kids' => '0',
            'checkin' => '2022-11-30',
            'checkout' => '2022-12-03'
        ];
        DB::table('reserves')->insert($param);

        $param = [
            'guest_id' => '3',
            'num_adults' => '6',
            'num_kids' => '0',
            'checkin' => '2022-05-30',
            'checkout' => '2022-06-03'
        ];
        DB::table('reserves')->insert($param);

        $param = [
            'guest_id' => '4',
            'num_adults' => '2',
            'num_kids' => '0',
            'checkin' => '2022-11-30',
            'checkout' => '2022-12-03'
        ];
        DB::table('reserves')->insert($param);

        $param = [
            'guest_id' => '5',
            'num_adults' => '1',
            'num_kids' => '0',
            'checkin' => '2022-12-30',
            'checkout' => '2023-01-03'
        ];
        DB::table('reserves')->insert($param);

        $param = [
            'guest_id' => '6',
            'num_adults' => '3',
            'num_kids' => '0',
            'checkin' => '2022-12-30',
            'checkout' => '2023-01-03'
        ];
        DB::table('reserves')->insert($param);

        $param = [
            'guest_id' => '7',
            'num_adults' => '12',
            'num_kids' => '4',
            'checkin' => '2022-12-14',
            'checkout' => '2022-12-19'
        ];
        DB::table('reserves')->insert($param);

        $param = [
            'guest_id' => '7',
            'num_adults' => '8',
            'num_kids' => '0',
            'checkin' => '2021-12-14',
            'checkout' => '2021-12-19'
        ];
        DB::table('reserves')->insert($param);
    }
}
