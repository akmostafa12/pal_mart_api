<?php

namespace App\Http\Controllers;

use App\Models\pastriesGlocoze;
use App\Models\pastriesLactoze;
use Exception;
use Illuminate\Http\Request;

class pastriesController extends Controller
{
    //
    function postLactoze(Request $req){
        try{
            $pastries=pastriesLactoze::create([
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
       return response()->json([pastriesLactoze::all()]);
       

    }
    function postGlocoze(Request $req){
        try{
            $pastries=pastriesGlocoze::create([
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
       return response()->json([pastriesGlocoze::all()]);
       

    }
}
