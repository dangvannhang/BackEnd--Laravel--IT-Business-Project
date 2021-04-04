<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\RegisterRequest;
use App\Http\Requests\LoginRequest;
use App\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;


class UserController extends Controller
{
    public function register(RegisterRequest $request) {
        $user = new User;
        $user->fill($request->all());
        $user->password = Hash::make($request->password);
        $user->save();

        return response()->json($user);
    }
    
    public function login(Request $request) {
        if(Auth::attempt([
            'username' => $request->username,
            'password' => $request->password
        ])){
            $user = User::where('username',$request->username)->first();
            $user->token = $user->createToken('App')->accessToken;

            return response()->json($user);
        }
        return response()->json(['email' => 'sai ten truy cap hoac mat khau'], 401);
    }

    public function userInfo(Request $request) {
        return response()->json($request->user('api')); 
    }

    // public function checkLogin() {

    //     if (Auth::check()) {
            
    //         return response()->json(['status'=>'authenticated']);
    //     }
    //     return response()->json(['status'=>'unauthenticated']);
    // }


    public function photographer_popular() {
        

    }
    public function photographer_recommendation() {

        
    }
    
}
