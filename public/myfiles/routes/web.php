<?php

use Illuminate\Support\Facades\Route;
use App\HTTP\Controllers\MainController;
use App\HTTP\Controllers\ForumController;
use App\HTTP\Controllers\CookieController;
use App\HTTP\Controllers\TestController;

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

Route::get('/hello', [MainController::class, 'hello'])->name('hello');

Route::get('/main', [MainController::class, 'main_page'])->name('main');



Route::get('/history', [MainController::class, 'history_page'])->name('history');



Route::get('/test', [TestController::class, 'test_page'])->name('test');

Route::get('/test/qwestions', [TestController::class, 'qwestions'])->name('qwestions');

Route::get('/test/submit', [TestController::class, 'result_submit'])->name('result_submit');

Route::get('/test/good', [TestController::class, 'good_result'])->name('good');

Route::get('/test/bad', [TestController::class, 'bad_result'])->name('bad');



Route::get('/forum', [ForumController::class, 'forum_page'])->name('forum');

Route::post('/forum/submit', [ForumController::class, 'forum_submit'])->name('contact-form');



Route::get('/games', [MainController::class, 'game_page'])->name('games');

Route::get('/games/chess', [MainController::class, 'chess_page'])->name('chess');

Route::get('/games/button', [MainController::class, 'button_game_page'])->name('button_game');

Route::get('/games/button/gameover', [MainController::class, 'gameover'])->name('gameover');



Route::get('/set', [CookieController::class, 'setCook'])->name('set');

Route::get('/', [CookieController::class, 'getCookie'])->name('get');

Route::get('/zip', [ZipController::class, 'Zip'])->name('get');





