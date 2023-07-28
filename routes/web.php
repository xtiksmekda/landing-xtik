<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('home', [

        //bebas mau diganti apa aja musiknya hehe
        //hosted on cloud.ryzendesu.com
        'music' => 'https://cloud.ryzendesu.com/api/name/Orange.mp3?path=/media/Orange.mp3',
                    //cicak mati njir

        //bebas mau lu ganti apa hehe
        'website' => 'https://www.xtikmedia.my.id/tentangxtik',
        'instagram' => 'https://www.instagram.com/xtiksmekda',
        'youtube' => 'https://www.youtube.com/@xtiksmekda',
        'facebook' => 'https://www.facebook.com/xtiksmekda',
        'twitter' => 'https://www.twitter.com/xtiksmekda',
        'tiktok' => 'https://www.tiktok.com/@xtiksmekda',
        'threads' => 'https://www.threads.net/@xtiksmekda',

    ]);
});
