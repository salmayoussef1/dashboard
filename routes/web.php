<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/HELLO',function(){
    return 'HELLO ..';
});