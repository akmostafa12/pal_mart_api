<?php

namespace App\Http\Controllers;

use App\Models\snacksGlocoze;
use App\Models\snacksLactoze;
use Exception;
use Illuminate\Http\Request;

class snacksController extends Controller
{
    //
    function postLactoze(Request $req){
        try{
            $snacks=snacksLactoze::create([
                'image'=>$req->input('image'),
                'name'=>$req->input('name'),
                'price'=>$req->input('price'),
                'cazeon'=>$req->input('cazeon')
            ]);
            return response()->json(['message'=>'Added Successfully'],200);

        }catch(Exception $e){
            return response()->json(['message'=>'Failed To Fetch Data'],401);

        }

    }
    function getLactoze(Request $req){
       return response()->json([snacksLactoze::all()]);
       

    }
    function postGlocoze(Request $req){
        try{
            $snacks=snacksGlocoze::create([
                'image'=>$req->input('image'),
                'name'=>$req->input('name'),
                'price'=>$req->input('price'),
                'cazeon'=>$req->input('cazeon')
            ]);
            return response()->json(['message'=>'Added Successfully'],200);

        }catch(Exception $e){
            return response()->json(['message'=>'Failed To Fetch Data'],401);

        }

    }
    function getGlocoze(Request $req){
       return response()->json([snacksGlocoze::all()]);
       

    }
}
