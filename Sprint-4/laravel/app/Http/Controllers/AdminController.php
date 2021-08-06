<?php

namespace App\Http\Controllers;

use App\Models\Artikel;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    public function index()
    {
        $webData['activeMenu'] = '';
        $webData['pageTitle'] = 'Dashboard';
        return view('adm-dashboard', ['data'=> $webData]);
    }
    
    public function artikel()
    {
        $webData['activeMenu'] = 'Artikel';
        $webData['pageTitle'] = 'Artikel';
        $webData['artikelData'] = Artikel::all();
        return view('artikel/adm-artikel', ['data'=>$webData]);
    }
    
    public function artikelInput(Request $request, $id = null)
    {
        $method = $request->method();
        
        if($method == 'POST' && $request->routeIs('admin.artikel.postInput') == 1){
            $validateData = $request->validate([
                'judul' => 'required',
                'deskripsi' => 'required'
            ]);

            $artikel = new Artikel();
            $artikel->judul = $validateData['judul'];
            $artikel->deskripsi = $validateData['deskripsi'];
            $artikel->creator = session('name');
            $artikel->save();

            session()->flash('success', 'Yuhu! kamu telah berhasil menambah artikel');
            return redirect()->route('admin.artikel');
        }else if ($method == 'GET' && $request->routeIs('admin.artikel.edit')) {
            $artikel = Artikel::findOrFail($id);

            $webData['activeMenu'] = 'Artikel';
            $webData['pageTitle'] = 'Edit Artikel';
            $webData['artikel'] = $artikel;
            $webData['mode'] = 'Edit';
            return view('artikel/adm-input-artikel', ['data' => $webData]);
        }else if($method == 'PATCH' && $request->routeIs('admin.artikel.postEdit')) {
            
        
        }else{
            $webData['activeMenu'] = 'Artikel';
            $webData['pageTitle'] = 'Tambah Artikel';
            $webData['mode'] = 'Add';
            return view('artikel/adm-input-artikel', ['data' => $webData]);   
        }
    }

    public function artikelUpdate(Request $request, $id)
    {
        $validateData = $request->validate([
            'judul' => 'required',
            'deskripsi' => 'required'
        ]);

        $artikel = Artikel::findOrFail($id);

        $artikel->judul = $validateData['judul'];
        $artikel->deskripsi = $validateData['deskripsi'];
        $artikel->creator = session('name');
        $artikel->save();

        session()->flash('success', 'Yuhu! kamu telah berhasil merubah artikel');
        return redirect()->route('admin.artikel');
    }

    public function artikelDelete(Request $request, $id)
    {
        $artikel = Artikel::findOrFail($id);
        $artikel->delete();
        session()->flash('success', 'Yuhu! kamu telah berhasil menghapus artikel');
        return redirect()->route('admin.artikel');
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
                    return redirect('/admin/dashboard');
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
    
    //for admin sementara
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
            session()->flash('success', 'Yuhu! kamu telah berhasil mendaftar');
            return redirect()->route('admin.login');
        }else{
            return view('register');
        }
    }
    
    public function logout()
    {
        session()->flush();
        session()->flash('status', 'Selamat Tinggal!');
        return redirect('/login');
    }
}
