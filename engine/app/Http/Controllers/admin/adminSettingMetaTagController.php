<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\SettingMetaTag;

class adminSettingMetaTagController extends Controller
{
    public function edit($id)
    {
        $settingMetaTag = SettingMetaTag::get();
        $data = SettingMetaTag::find($id);
        return view('admin.settingMetaTag.edit', compact('data','settingMetaTag'));
    }

    public function update(Request $request, $id)
    {
        $data = SettingMetaTag::find($id);
        $data->meta_title = $request->meta_title;
        $data->meta_description = $request->meta_description;
        $data->save();

        return redirect()->route('admin.settingMetaTag.edit', $id)->with('status', 'Data has been successfully changed');
    }
}
