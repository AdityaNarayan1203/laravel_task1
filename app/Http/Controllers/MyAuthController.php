<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\MyAuth;
use Symfony\Contracts\Service\Attribute\Required;

class MyAuthController extends Controller
{
    function register()
    {
        return view('register');
    }
    function login()
    {
        return view('login');
    }
    function register_save(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:my_auths',
            'password' => 'required|min:8|max:12',
        ]);

        $user = new MyAuth;
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $query = $user->save();

        if ($query) {
            return back()->with('success', 'Registered Successfully!');
        } else {
            return back()->with('fail', 'Something went wrong!');
        }
    }
    function login_check(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:8|max:12',
        ]);

        $user = MyAuth::where('email', '=', $request->email)->first();
        if ($user) {
            if (Hash::check($request->password, $user->password)) {
                $request->session()->put('user_id', $user->id);
                return redirect('profile');
            } else {
                return back()->with('fail', 'Invalid Login credentials!');
            }
        } else {
            return back()->with('fail', 'User is not Registered!');
        }
    }

    function profile()
    {
        $user = MyAuth::where('id', '=', session('user_id'))->first();
        $data = ["user_data" => $user];
        return view('auth.profile', $data);
    }
    function logout()
    {
        if (session()->has('user_id')) {
            session()->pull('user_id');
            return redirect('login')->with('logout', 'Successfully Logged Out!');
        }
    }
}
