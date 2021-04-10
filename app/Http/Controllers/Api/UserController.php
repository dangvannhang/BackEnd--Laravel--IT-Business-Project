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


    // NOt 
    public function photographer_popular() {
        
        $popular = User::where('id_role',3)->get();
        
        return response()->json(['popular'=>$popular]);
    }

    public function photographer_recommendation() {
        $recommendation=User::where('id_role',3)->get();

        return response()->json(['recommendation'=> $recommendation]);
    }


    public function search_photographer (Request $request) {

        $search = $request->input('search'); 

        // $photographer = User::where('id_role',3)->get();

        
        // $photographer = User::where('nickname','LIKE','%'.$search.'%')
        // ->orWhere('email','LIKE','%'.$search.'%')->get(); 

        $photographer = User::where('id_role',3)
        ->where('nickname','LIKE','%'.$search.'%')
        ->orWhere('id_role',3)->where('email','LIKE','%'.$search.'%')->get();

        return response()->json(['result' => $photographer]);
    }
    
}
