<?php

use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome.index');
// });

Route::get('/', function () {
    return view('contents.welcome');
});

Route::get('/collection', function () {
    return view('contents.collection');
});

Route::get('/contact', function () {
    return view('contents.contact');
});
