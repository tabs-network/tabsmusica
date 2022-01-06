<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use Hash;
use DB;

class AdminSeeder extends Seeder
{

    public function run()
    {
        DB::table('admin')->delete();
        DB::table('admin')->insert(
        [
            [
                'name' => 'Yosep Kandiyas',
                'email' => 'admin@gmail.com',
                'password' => Hash::make('admin'),
            ]
        ]);
    }
}
