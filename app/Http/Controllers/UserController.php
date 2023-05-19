<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function profile()
    {
        $user = User::where('id', Auth::user()->id)->first();
        return view('web.profile.info', compact('user'));
    }

    public function profileupdate(Request $request)
    {
        User::where('id', Auth::user()->id)->updte([
            'name' => request('name'),
            'passion' => request('passion'),
            'phone_no' => request('phone_no'),
            'city' => request('city'),
            'about_me' => request('about_me'),
        ]);

        return redirect()->back()->with('success', 'Profile Updated Successfully');
    }
}
