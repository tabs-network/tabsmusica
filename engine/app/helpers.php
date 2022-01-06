<?php 
use App\Models\SettingMetaTag;

function settingMetaTag($page)
{
    return $data = SettingMetaTag::where('page', $page)->first();
}