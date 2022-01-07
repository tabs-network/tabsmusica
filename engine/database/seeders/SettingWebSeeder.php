<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SettingWebSeeder extends Seeder
{
    public function run()
    {
        DB::table('setting_web')->delete();
        DB::table('setting_web')->insert(
        [
            [
                'id' => '1',
                'website_name' => 'TABS Musica',
                'instagram' => 'instagramurl',
                'twitter' => 'twitterurl',
                'facebook' => 'facebookurl',
            ]
        ]);
    }
}
