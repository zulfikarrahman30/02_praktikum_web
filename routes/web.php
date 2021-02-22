<?php


use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\ProgramController;
use App\Http\Controllers\UsController;
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
/*-------Praktikum 1-------*/

Route::get('/abcd', function () {
    return ('Selamat datang');
});

Route::get('/about', function () {
    return ('Nama : Zulfikar Rahman <br> NIM : 1941720192');
});

Route::get('/article/{id}', function ($id) {
    return ('halaman artikel ini dengan ID').$id;
});


/*-------Praktikum 2-------*/

Route::get('/', [PageController::class, 'index']);

Route::get('/about', [PageController::class, 'about']);

Route::get('/articles/{id}', [PageController::class, 'articles']);

/*-------Praktikum 3-------*/
Route::prefix('product')->group(function () {
    Route::get('/marbel_edu_games', [ProductController::class, 'marbel_edu_games']);
    Route::get('/marbel_and_friends_kid_games', [ProductController::class, 'marbel_and_friends_kid_games']);
    Route::get('/riri_story_books', [ProductController::class, 'riri_story_books']);
    Route::get('/kolak_kids_songs', [ProductController::class, 'kolak_kids_songs']);
});

/* Param */
Route::get('news', [NewsController::class, 'news']);
Route::get('news_covid', [NewsController::class, 'news_covid']);

Route::prefix('program')->group(function () {

    Route::get('/karir', [ProgramController::class, 'karir']);
    Route::get('/magang', [ProgramController::class, 'magang']);
    Route::get('/kunjungan_industri', [ProgramController::class, 'kunjungan_industri']);
});

Route::get('aboutus/{id}', [UsController::class, 'aboutus']);

Route::get('/contactus/{id}', [UsController::class, 'contactus']);