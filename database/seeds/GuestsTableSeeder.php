<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GuestsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $param = [
            'name' => 'IKARIYA Chosuke',
            'mail' => 'leader@8jidayo.com',
            'address' => '東京都杉並区方南町4-44-99',
            'tel' => '03-3559-9856'
        ];
        DB::table('guests')->insert($param);

        $param = [
            'name' => 'KATO Cha',
            'mail' => 'yome@dameyo.net',
            'address' => '東京都港区台場2-4-8',
            'tel' => '03-1234-5555'
        ];
        DB::table('guests')->insert($param);

        $param = [
            'name' => 'SHIMURA Ken',
            'mail' => 'rip@hige.or.jp',
            'address' => '東京都港区赤坂5-3-6',
            'tel' => '03-4561-2398'
        ];
        DB::table('guests')->insert($param);

        $param = [
            'name' => 'NAKAMOTO Cozy',
            'mail' => 'gym@megane.com',
            'address' => '東京都港区東新橋1-6-1',
            'tel' => '03-7894-5612'
        ];
        DB::table('guests')->insert($param);

        $param = [
            'name' => 'TAGAGI Boom',
            'mail' => 'thunder@sama.co.jp',
            'address' => '東京都港区六本木3-2-1六本木グランドタワー',
            'tel' => '03-4569-8522'
        ];
        DB::table('guests')->insert($param);

        $param = [
            'name' => 'ARAI Chu',
            'mail' => 'chu@arai.net',
            'address' => '東京都渋谷区神南2-2-1',
            'tel' => '03-6987-5666'
        ];
        DB::table('guests')->insert($param);
    }
}
