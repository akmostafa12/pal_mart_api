<?php

use App\Http\Controllers\cannedController;
use App\Http\Controllers\coffeeController;
use App\Http\Controllers\iceCreamController;
use App\Http\Controllers\pastriesController;
use App\Http\Controllers\protienController;
use App\Http\Controllers\snacksController;
use App\Http\Controllers\userController;
use App\Http\Controllers\vegetablesController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');
Route::post('/register',userController::class .'@register');
Route::post('/login',userController::class .'@login');
Route::post('/userDetails',userController::class .'@userDetails');
Route::post('/postCannedLactoze',cannedController::class .'@postLactoze');
Route::get('/getCannedLactoze',cannedController::class .'@getLactoze');
Route::post('/postCannedGlocoze',cannedController::class .'@postGlocoze');
Route::get('/getCannedGlocoze',cannedController::class .'@getGlocoze');
Route::post('/postVegetablesLactoze',vegetablesController::class .'@postLactoze');
Route::get('/getVegetablesLactoze',vegetablesController::class .'@getLactoze');
Route::post('/postVegetablesGlocoze',vegetablesController::class .'@postGlocoze');
Route::get('/getVegetablesGlocoze',vegetablesController::class .'@getGlocoze');
Route::post('/postIceCreamLactoze',iceCreamController::class .'@postLactoze');
Route::get('/getIceCreamLactoze',iceCreamController::class .'@getLactoze');
Route::post('/postIceCreamGlocoze',iceCreamController::class .'@postGlocoze');
Route::get('/getIceCreamGlocoze',iceCreamController::class .'@getGlocoze');
Route::post('/postPastriesLactoze',pastriesController::class .'@postLactoze');
Route::get('/getPastriesLactoze',pastriesController::class .'@getLactoze');
Route::post('/postPastriesGlocoze',pastriesController::class .'@postGlocoze');
Route::get('/getPastriesGlocoze',pastriesController::class .'@getGlocoze');
Route::post('/postCoffeeLactoze',coffeeController::class .'@postLactoze');
Route::get('/getCoffeeLactoze',coffeeController::class .'@getLactoze');
Route::post('/postCoffeeGlocoze',coffeeController::class .'@postGlocoze');
Route::get('/getCoffeeGlocoze',coffeeController::class .'@getGlocoze');
Route::post('/postSnacksLactoze',snacksController::class .'@postLactoze');
Route::get('/getSnacksLactoze',snacksController::class .'@getLactoze');
Route::post('/postSnacksGlocoze',snacksController::class .'@postGlocoze');
Route::get('/getSnacksGlocoze',snacksController::class .'@getGlocoze');
Route::post('/postProtienLactoze',protienController::class .'@postLactoze');
Route::get('/getProtienLactoze',protienController::class .'@getLactoze');
Route::post('/postProtienGlocoze',protienController::class .'@postGlocoze');
Route::get('/getProtienGlocoze',protienController::class .'@getGlocoze');








