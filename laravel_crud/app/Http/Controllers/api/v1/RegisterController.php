<?php

namespace App\Http\Controllers\Api\v1;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;


class RegisterController extends Controller
{
    //Fungsi Registrasi
    public function register(Request $request){
        // Set validatedata
        $validateData = $request->validate([
            'name' => 'required|min:4',
            'email' => 'required|email',
            'password' => 'required|min:8'
        ]);
        
        // membuat akun user
        $user = User::create([
            'name'      => $request->name,
            'email'     => $request->email,
            'password'  => bcrypt($request->password)
        ]);

        //Jalankan JSON ketika create berhasil dilakukan
        if($user) {
            return response()->json([
                'success' => true,
                'user'    => $user,  
            ], 201);
        }

        //Jalankan JSON ketika insert gagal
        return response()->json([
            'success' => false,
        ], 409);
    }
}
