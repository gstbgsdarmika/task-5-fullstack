<?php

namespace App\Http\Controllers\Api\v1;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redis;

class LoginController extends Controller{
    // Fungsi login
    public function login(Request $request){
        $login = $request->validate([
            'email' => 'required|email:dns',
            'password' => 'required|min:8'
        ]);

    if (Auth::attempt($login)){
        $token = auth()->user()->createToken->with('authToken')->accessToken;
        return response()->json(['token' => $token], 200);
        } else{
            return response()->json(['error' => 'Gagal Login!'], 401);
        }
    }

    // Fungsi logout
    public function logout(Request $request){
        Auth::logout();
        $request->session()->regenerate();
        $request->session()->regenerateToken();
        return response(['message => Berhasil Logout']);
    }

    // Fungsi info user
    public function userInfo(){
    $user = auth()->user();
    return response()->json(['user' => $user], 200);
    }
}
