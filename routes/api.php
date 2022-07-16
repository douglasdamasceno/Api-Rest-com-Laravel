<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

//Teste
Route::get("/teste",function (Request $request){
//    dd($request->headers->all());
//    dd($request->headers->get('Authorization'));
    $response = new \Illuminate\Http\Response(json_encode(["msg"=>"minha mensagem da api"]));
    $response->header('Content-Type','application/json');
    return $response;
});

//Products Route
Route::namespace('App\Http\Controllers\Api')->group(function (){

    Route::get("/products",'ProductController@index');
    Route::post("/products",'ProductController@save');
});


