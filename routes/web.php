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

        //logo Header dan Profile
        'logo' => 'https://ugc.production.linktr.ee/Xa5XAyISLK8YAShaYKje_A90y1AMSCMMtZs7f',

        //bebas mau diganti apa aja musiknya hehe
        //hosted on cloud.ryzendesu.com
        'judul_lagu' => 'Orange',
        'Pencipta_lagu' => '7!!',
        'cover_lagu' => 'assets/img/orange.jpg', //bisa diganti link kalo mau
        'link_musik' => 'https://cloud.ryzendesu.com/api/name/Orange.mp3?path=/media/Orange.mp3',
                    //cicak mati njir

        //link platform lagunya
        'spotify' => 'https://open.spotify.com/track/21htkjP5rYjD3CXG3y9wCT',
        'apple_music' => 'https://music.apple.com/us/album/orange/982659827',
        'tidal' => 'https://tidal.com/browse/track/144294816',
        'deezer' => 'https://www.deezer.com/en/track/976030142',
        'yt_music' => 'https://music.youtube.com/watch?v=O48gok_FLCg&list=RDAMVMO48gok_FLCg',
        'amazon_music' => 'https://music.amazon.com/albums/B00VDO364Y',

        //bebas mau lu ganti apa hehe
        'website' => 'https://www.xtiksmekda.biz.id/',
        'instagram' => 'https://www.instagram.com/xtiksmekda',
        'youtube' => 'https://www.youtube.com/@xtiksmekda',
        'facebook' => 'https://www.facebook.com/xtiksmekda',
        'twitter' => 'https://www.twitter.com/xtiksmekda',
        'tiktok' => 'https://www.tiktok.com/@xtiksmekda',
        'threads' => 'https://www.threads.net/@xtiksmekda',

    ]);
});
