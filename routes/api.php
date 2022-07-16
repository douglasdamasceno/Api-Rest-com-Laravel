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
Route::namespace('App\Http\Controllers\Api')->prefix('products')->group(function (){

    Route::get('/','ProductController@index');
    Route::get('/{id}','ProductController@show');
    Route::post('/','ProductController@save');
    Route::put('/','ProductController@update');
    Route::patch('/','ProductController@update');
    Route::delete('/{id}','ProductController@delete');
});


