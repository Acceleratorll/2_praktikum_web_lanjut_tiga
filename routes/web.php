<?php

use App\Http\Controllers\EduGamesController;
use App\Http\Controllers\KidsGamesController;
use App\Http\Controllers\StoryBooksController;
use App\Http\Controllers\KidsSongController;
use App\Http\Controllers\NewsController;
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
    return '<a href="https://www.educastudio.com/">https://www.educastudio.com/</a>';
});

Route::prefix('category')->group(function (){
    Route::get('/edugames', [EduGamesController::class, 'index']);
    Route::get('/kidsgames', [KidsGamesController::class, 'index']);
    Route::get('/storybooks', [StoryBooksController::class, 'index']);
    Route::get('/kidssong', [KidsSongController::class, 'index']);
});

Route::get('/news/{id?}', [NewsController::class, 'index']);