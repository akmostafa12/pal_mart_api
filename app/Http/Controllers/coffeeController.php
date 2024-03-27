<?php

namespace App\Http\Controllers;

use App\Models\coffeeGlocoze;
use App\Models\coffeeLactoze;
use Exception;
use Illuminate\Http\Request;

class coffeeController extends Controller
{
    //
    function postLactoze(Request $req){
        try{
            $coffee=coffeeLactoze::create([
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
       return response()->json([coffeeLactoze::all()]);
       

    }
    function postGlocoze(Request $req){
        try{
            $coffee=coffeeGlocoze::create([
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
       return response()->json([coffeeGlocoze::all()]);
       

    }
    
}
