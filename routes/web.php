<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome.index');
});

Route::get('/content', function () {
    return view('contents.content');
});
