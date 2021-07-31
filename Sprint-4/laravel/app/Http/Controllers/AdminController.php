<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    public function index()
    {
        $pwd = Hash::make('admin');
        return "Hello World! $pwd";
    }

    public function login(Request $request)
    {
        $method = $request->method();
        $routeBefore = $request->routeIs('admin.postLogin');

        if($method == 'POST' && $routeBefore == 1){
            $validateData = $request->validate([
                'username'  => 'required',
                'password'  => 'required',
            ]);

            $fetchedUser = User::where('username', $validateData['username'])->first();
            if($fetchedUser) {
                if(Hash::check($validateData['password'], $fetchedUser->password)){
                    session([
                        'name' => $fetchedUser->name,
                        'username' => $fetchedUser->username,
                        'level' => $fetchedUser->level
                    ]);
                    return view('home');
                }else{
                    return back()->withInput()->with('error', 'Salah Password');
                }
            }else {
                return back()->withInput()->with('error', 'Username tidak terdaftar');
            }
        }else{
            return view('login');
        }
    }

    public function register(Request $request)
    {
        $method = $request->method();
        $routeBefore = $request->routeIs('admin.postRegister');

        if($method == 'POST' && $routeBefore == 1){
            $validateData = $request->validate([
                'name' => 'required',
                'username' => 'required',
                'password' => 'required|min:6|confirmed',
            ]);
            
            $user = new User();
            $user->name = $validateData['name'];
            $user->username = $validateData['username'];
            $user->password = Hash::make($validateData['password']);
            $user->level = "User";
            $user->save();
            return 'success';
        }else{
            return view('register');
        }
    }
}
