<?php

namespace App\Http\Controllers;

use App\Models\iceCreamGlocoze;
use App\Models\iceCreamLactoze;
use Exception;
use Illuminate\Http\Request;

class iceCreamController extends Controller
{
    //
    function postLactoze(Request $req){
        try{
            $iceCream=iceCreamLactoze::create([
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
       return response()->json([iceCreamLactoze::all()]);
       

    }
    function postGlocoze(Request $req){
        try{
            $iceCream=iceCreamGlocoze::create([
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
       return response()->json([iceCreamGlocoze::all()]);
       

    }
}
