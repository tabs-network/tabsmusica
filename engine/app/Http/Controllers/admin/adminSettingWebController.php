<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\SettingWeb;

class adminSettingWebController extends Controller
{
    public function edit()
    {
        $data = SettingWeb::find(1);
        return view('admin.settingWeb.edit', compact('data'));
    }

    public function update(Request $request, $id)
    {
        $data = SettingWeb::find(1);
    }
}
