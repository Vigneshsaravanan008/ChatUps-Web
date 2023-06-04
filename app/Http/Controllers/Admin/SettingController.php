<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Setting;
use Illuminate\Http\Request;

class SettingController extends Controller
{
    public function settings()
    {
        $settings = Setting::first();
        return view('admin.settings.general', compact('settings'));
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
        ]);
        $datas = $request->except('_token', 'id', 'logo_path', 'favicon_path', 'white_favicon_icon_path', 'home_path');

        // if ($request->hasFile('logo')) {
        //     $files = request()->file('logo');
        //     $file_name = str_replace(" ", "-", $files->getClientOriginalName());
        //     // $file_arr  = Helper::upload_files($file_name, 'logo', '');
        //     $files->move($file_arr['path'], $file_arr['file_name']);
        //     $image_path = 'uploads/' . $file_arr['db_path'];
        //     $datas['logo'] = $image_path;
        // } else {
        //     $data['logo'] = request('logo_path');
        // }

        // if ($request->hasFile('favicon')) {
        //     $files = request()->file('favicon');
        //     $file_name = str_replace(" ", "-", $files->getClientOriginalName());
        //     // $file_arr  = Helper::upload_files($file_name, 'favicon', '');
        //     $files->move($file_arr['path'], $file_arr['file_name']);
        //     $image_path = 'uploads/' . $file_arr['db_path'];
        //     $datas['favicon'] = $image_path;
        // } else {
        //     $data['favicon'] = request('favicon_path');
        // }

        // if ($request->hasFile('home_image')) {
        //     $files = request()->file('home_image');
        //     $file_name = str_replace(" ", "-", $files->getClientOriginalName());
        //     $file_arr  = Helper::upload_files($file_name, 'home_image', '');
        //     $files->move($file_arr['path'], $file_arr['file_name']);
        //     $image_path = 'uploads/' . $file_arr['db_path'];
        //     $datas['home_image'] = $image_path;
        // } else {
        //     $data['home_image'] = request('home_path');
        // }

        // if ($request->hasFile('white_favicon_icon')) {
        //     $files = request()->file('white_favicon_icon');
        //     $file_name = str_replace(" ", "-", $files->getClientOriginalName());
        //     // $file_arr  = Helper::upload_files($file_name, 'favicon', '');
        //     $files->move($file_arr['path'], $file_arr['file_name']);
        //     $image_path = 'uploads/' . $file_arr['db_path'];
        //     $datas['white_favicon_icon'] = $image_path;
        // } else {
        //     $data['white_favicon_icon'] = request('white_favicon_icon_path');
        // }

        Setting::updateOrCreate(['id' => $request->id], $datas);
        return redirect()->route('general.settings');
    }
}
