<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {

    $user = [
        'nome' => 'Sasha',
        'cognome' => 'Mainardi'
    ];

    return view('home', $user);
});

Route::get('/about.php', function () {
    return view('about');
})->name('about');

Route::get('/story.php', function () {
    return view('story');
})->name('story');
