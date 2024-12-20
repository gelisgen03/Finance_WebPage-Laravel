<?php

use App\Http\Controllers\anasayfa;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\App;
use App\Http\Controllers\Front\HomePage;

Route::post('iletisim/post', [anasayfa::class,'post'])->name('iletisim.post');



//Route::get('/',[anasayfa::class,'index']);
Route::get('/',[HomePage::class, 'index'],);
Route::get('/hakkimizda', [anasayfa::class, 'hakkimizda']);
Route::get('/iletisim', [anasayfa::class,'iletisim']);
Route::get('/users', [App::class, 'getUsers']);


