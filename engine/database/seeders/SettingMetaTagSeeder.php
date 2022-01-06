<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SettingMetaTagSeeder extends Seeder
{
    public function run()
    {
        DB::table('setting_meta_tag')->delete();
        DB::table('setting_meta_tag')->insert(
        [
            [
                'id' => '1',
                'page' => 'home',
                'meta_title' => 'Meta title Home',
                'meta_description' => 'Meta description Home',
            ],
            [
                'id' => '2',
                'page' => 'artist',
                'meta_title' => 'Meta title artist',
                'meta_description' => 'Meta description artist',
            ],
            [
                'id' => '3',
                'page' => 'chord',
                'meta_title' => 'Meta title chord',
                'meta_description' => 'Meta description chord',
            ]
        ]);
    }
}
