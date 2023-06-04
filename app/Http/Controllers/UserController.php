<?php

namespace App\Http\Controllers;

use App\Models\Education;
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

    public function overview($slug)
    {
        $education = Education::where('user_id', Auth::user()->id)->where('type', 2)->first();
        return view('web.profile.overview', compact('education'));
    }

    public function relationshipStatus(Request $request)
    {
        User::where('id', Auth::user()->id)->update([
            'relationship_status' => request('relationship_status'),
        ]);

        return redirect()->back()->with('success', 'Relationship Status Updated Successfully');
    }

    public function profileupdate(Request $request)
    {
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

    public function education()
    {
        $works = Education::where('user_id', Auth::user()->id)->where('type', 3)->get();
        $colleges = Education::where('user_id', Auth::user()->id)->where('type', 2)->get();
        $schools = Education::where('user_id', Auth::user()->id)->where('type', 1)->get();
        return view('web.profile.education', compact('works', 'colleges', 'schools'));
    }

    public function workupdate(Request $request)
    {
        $this->validate($request, [
            'company' => 'required',
            'position' => 'required',
            'city' => 'required'
        ]);

        $path = 'profile/education/';
        $files = request()->file('image');
        $this->imageUpload($request, $path);

        Education::create([
            'user_id' => Auth::user()->id,
            'company' => request('company'),
            'position' => request('position'),
            'city' => request('city'),
            'description' => request('description'),
            'image' => $path . $files->getClientOriginalName(),
            'from_year' => request('from_year'),
            'to_year' => request('to_year'),
            'currently_working' => request('to_year') ? 1 : 0,
            'type' => 3,
        ]);

        return redirect()->back()->with('success', 'Work Details Updated Successfully');
    }

    public function collegeupdate(Request $request)
    {
        $this->validate($request, [
            'college' => 'required',
            'degree' => 'required',
            'image' => 'required'
        ]);

        $path = 'profile/education/';
        $files = request()->file('image');
        $this->imageUpload($request, $path);

        Education::create([
            'user_id' => Auth::user()->id,
            'college' => request('college'),
            'degree' => request('degree'),
            'graduate' => request('graduate'),
            'city' => request('city'),
            'description' => request('description'),
            'image' => $path . $files->getClientOriginalName(),
            'from_year' => request('from_year'),
            'to_year' => request('to_year'),
            'type' => 2,
        ]);

        return redirect()->back()->with('success', 'College Details Updated Successfully');
    }

    public function schoolupdate(Request $request)
    {
        $this->validate($request, [
            'school' => 'required',
            'from_year' => 'required',
            'city' => 'required',
            'description' => 'required'
        ]);

        $path = 'profile/education/';
        $files = request()->file('image');
        $this->imageUpload($request, $path);

        Education::create([
            'user_id' => Auth::user()->id,
            'school' => request('school'),
            'city' => request('city'),
            'description' => request('description'),
            'image' => $path . $files->getClientOriginalName(),
            'from_year' => request('from_year'),
            'to_year' => request('to_year'),
            'type' => 1,
        ]);

        return redirect()->back()->with('success', 'School Details Updated Successfully');
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
