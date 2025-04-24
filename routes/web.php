<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/teste', function(){
    return view(    'teste');   
});
Route::get('/teste/{valor}', function($valor){
    return "Você digitou {$valor}";   
});

Route::get("/soma/{num1}/{num2}", function($num1, $num2){
    return $num1 + $num2;
});
