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
                'image_cover' => '1216237126318273-image-cover.svg',
                'image' => '1923714128479123-image.png',
                'instagram' => 'instagramurl',
                'twitter' => 'twitterurl',
                'facebook' => 'facebookurl',
            ]
        ]);
    }
}
