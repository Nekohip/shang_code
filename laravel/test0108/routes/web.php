<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('helloWorld');
});

Route::get('/test', function () {
    return view('test');
});

Route::get('/sum', function () {
    $sum = 0;
    for($i = 1; $i <= 10; $i++)
    {
        $sum += $i;
    }
    dd($sum);
});

Route::get('/home', function () {
    return view('home');
});

