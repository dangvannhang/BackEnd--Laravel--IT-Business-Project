<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\RegisterRequest;
use App\Http\Requests\LoginRequest;
use App\User;
use App\Customer;
use App\User_Role;
use App\Photographer;
use App\Detail_Photographer;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;


class UserController extends Controller
{

    public function user_register(Request $request) {

        $user = new User;
    
        $user -> username = $request -> username;
        $user -> password = Hash::make($request -> password);
        $user -> email    = $request -> email;
        $user -> save();

        $id_customer = $user->id;
        $customer = new Customer;
        $customer -> id_customer = $id_customer;
        $customer -> billing = $request->input('billing');
        $customer ->save();

        $user_role = new User_Role;
        $user_role -> id_user = $id_customer;
        $user_role -> id_role = 2;
        $user_role -> save();


        return response()->json($user);
    }



    public function photographer_register(Request $request) {

        $user = new User;
        
        $user -> username = $request -> username;
        $user -> password = Hash::make($request -> password);
        $user -> email    = $request -> email;
        $user -> save();

        $id_photographer = $user->id;
        $photographer = new Photographer;
        $photographer -> id_photographer = $id_photographer;
        $photographer ->save();

        $user_role = new User_Role;
        $user_role -> id_user = $id_photographer;
        $user_role -> id_role = 3;
        $user_role -> save();

        
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
        return response()->json(['email' => 'Sai ten truy cap hoac mat khau'], 401);
    }

    public function userInfo(Request $request) {
        return response()->json($request->user('api')); 
    }



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

        $photographer = Detail_Photographer::where('nickname','LIKE','%'.$search.'%')->get();

        return response()->json(['result' => $photographer]);
    }

    

}
