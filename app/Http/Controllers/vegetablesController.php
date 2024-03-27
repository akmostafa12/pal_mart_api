<?php

namespace App\Http\Controllers;

use App\Models\vegetablesGlocoze;
use App\Models\vegetablesLactoze;
use Exception;
use Illuminate\Http\Request;

class vegetablesController extends Controller
{
    //
    function postLactoze(Request $req){
        try{
            $canned=vegetablesLactoze::create([
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
       return response()->json([vegetablesLactoze::all()]);
       

    }
    function postGlocoze(Request $req){
        try{
            $vegetables=vegetablesGlocoze::create([
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
       return response()->json([vegetablesGlocoze::all()]);
       

    }

}
