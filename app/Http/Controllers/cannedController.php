<?php

namespace App\Http\Controllers;

use App\Models\cannedGlocoze;
use App\Models\cannedLactoze;
use Exception;
use Illuminate\Http\Request;

class cannedController extends Controller
{
    function postLactoze(Request $req){
        try{
            $canned=cannedLactoze::create([
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
       return response()->json([cannedLactoze::all()]);
       

    }
    function postGlocoze(Request $req){
        try{
            $canned=cannedGlocoze::create([
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
       return response()->json([cannedGlocoze::all()]);
       

    }
}
