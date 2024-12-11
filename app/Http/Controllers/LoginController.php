<?php

namespace App\Http\Controllers;

use App\Models\login;
use App\Models\Pengguna;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;


class LoginController extends Controller
{
    public function login(){
        return view ('login.login');
    }
    public function cekLogin(Request $request){
        $user = $request->name;
        $pass = $request->password;
        $pengguna = Pengguna::where('name', $user)->first();
        if($pengguna){
            if(Hash::check($pass, $pengguna -> password)){
                session()->put('pengguna', $pengguna); 
                return redirect('/beranda');
            }else{
                return redirect('/login')->with('error', 'password salah');
            }
        }else{
            return redirect('/login')->with('error', 'username salah');
        }}
    public function logout(){
        session()->forget('pengguna');
        return redirect('/login');}
}
