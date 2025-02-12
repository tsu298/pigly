<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PiglyTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $param = [
            'name' => 'taro',
            'email' => '012345@gmail.com',
            'password' => '55555'
        ];
        DB::table('pigly_users')->insert($param);
    }
}
