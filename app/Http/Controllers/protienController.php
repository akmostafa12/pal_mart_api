<?php

namespace App\Http\Controllers;

use App\Models\protienGlocoze;
use App\Models\protienLactoze;
use Exception;
use Illuminate\Http\Request;

class protienController extends Controller
{
    //
    function postLactoze(Request $req){
        try{
            $protien=protienLactoze::create([
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
       return response()->json([protienLactoze::all()]);
       

    }
    function postGlocoze(Request $req){
        try{
            $protien=protienGlocoze::create([
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
       return response()->json([protienGlocoze::all()]);
       

    }
}
