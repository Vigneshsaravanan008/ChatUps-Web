<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Traits\ImageTrait;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    use ImageTrait;

    public function profile()
    {
        $user = User::where('id', Auth::user()->id)->first();
        return view('web.profile.info', compact('user'));
    }

    public function profileupdate(Request $request)
    {
        return $request;
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required|unique:users,email,' . Auth::user()->id,
            'passion' => 'required',
            'day' => 'nullable',
            'month' => 'nullable',
            'year' => 'nullable',
            'city' => 'nullable',
            'about_me' => 'nullable'
        ]);

        User::where('id', Auth::user()->id)->update([
            'name' => request('name'),
            'passion' => request('passion'),
            'email' => request('email'),
            'phone_no' => request('phone_no'),
            'city' => request('city'),
            'about_me' => request('about_me'),
            'day' => request('day'),
            'month' => request('month'),
            'year' => request('year'),
            'city' => request('city'),
            'about_me' => request('about_me'),
        ]);

        return redirect()->back()->with('success', 'Profile Updated Successfully');
    }

    public function profileupload(Request $request)
    {
        $this->validate($request, [
            'image' => 'required|mimes:jpeg,jpg,png'
        ]);

        (Auth::user()->image != null) ? unlink(Auth::user()->image) : "";

        $path = 'profile/';
        $files = request()->file('image');
        $this->imageUpload($request, $path);

        User::where('id', Auth::user()->id)->update([
            'image' => $path . $files->getClientOriginalName(),
        ]);

        return redirect()->back()->with('success', 'Image Uploaded Successfully');
    }

    public function changepassword()
    {
        return view('web.profile.change-password');
    }

    public function passwordupdate(Request $request)
    {
        $this->validate($request, [
            'password' => 'required',
            'confirm_password' => 'required',
        ]);

        User::where('id', Auth::user()->id)->update(['password' => bcrypt(request('password'))]);
        return redirect()->back()->with('success', 'Password Updated Successfully');
    }
}
