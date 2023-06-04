<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin;
use Illuminate\Contracts\Session\Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function home(Request $request)
    {
        if (!empty(Auth::guard('admin')->user()->id)) {
            return redirect()->route('admin.dashboard');
        }

        if ($request->isMethod('post')) {
            $data = $request->all();
            $rules = ['email' => 'required|email|max:255', 'password' => 'required',];

            $customMessages = ['email.required' => 'Please enter your Email to Login ', 'email.email' => ' Please enter correct Email to login', 'password.required' => ' Please enter correct Password to login'];

            $this->validate($request, $rules, $customMessages);

            $remember_me =  (!empty($request->remember_me)) ? TRUE : FALSE;

            if (Auth::guard('admin')->attempt(['email' => $data['email'], 'password' => $data['password']], $remember_me)) {
                return redirect()->route('admin.dashboard');
            } else {
                return redirect()->back()->with('warning', 'Check Given Credentials');
            }
        }

        return view('admin.auth.login');
    }

    public function dashboard()
    {
        return view('admin.dashboard');
    }

    public function profile()
    {
        return view('admin.profile.profile');
    }

    public function profileupdate(Request $request)
    {
        Admin::where('id', Auth::guard('admin')->user()->id)->update([
            'name' => request('name'),
            'email' => request('email'),
            'phone_no' => request('phone_no'),
        ]);

        return back()->with('success', 'Profile Updated Successfully');
    }

    public function passwordsettings(Request $request)
    {
        $this->validate($request, [
            'password' => 'required',
            'confirm_password' => 'required',
        ]);
        Admin::where('id', Auth::guard('admin')->user()->id)->update(['password' => bcrypt(request('password'))]);
        return back()->with('success', 'Password Updated Successfully');
    }

    public function logout()
    {
        Auth::guard('admin')->logout();
        Session::flush();
        return redirect('admin/login');
    }
}
