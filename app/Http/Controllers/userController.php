<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\users;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class userController extends Controller
{
    //
    function register(Request $request){
        try{
            $users=users::create([
                'firstName'=>$request->input('firstName'),
                'lastName'=>$request->input('lastName'),
                'email'=>$request->input('email'),
                'password'=>$request->input('password'),
                'gender'=>$request->input('gender'),
                'country'=>$request->input('country'),
                'intolerance'=>$request->input('intolerance'),

            ]);
            return response()->json(['message'=>'Registerd Successfully'],200);
        
        }catch(Exception $e){
            return response()->json(['message'=>'Registerd Failed'],401);
        }
    }
    function login(Request $request){
        $user=users::where('email',$request->input('email'))->first();
        if(!$user){
            return response()->json(['message'=>'You Are Not Authorized'],401);
        }
        if(!Hash::check($request->input('password'),$user->password)){
            return response()->json(['message'=>'You Are Not Authorized'],401);
        }
        return response()->json(['message'=>'Welcome'.' '.$user->firstName.' '.$user->lastName],200);
    
    
     }
     function userDetails(Request $request){
        $user = users::find($request->input('id'));
       return response()->json(["data"=>$user]);
     }
}
