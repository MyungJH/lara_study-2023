<!-- Laravelでは、web.phpに書かれたコードが処理の起点となって、必要に応じてファイルの中身を表示する仕組みになっている。 -->

<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\indexController;
use App\Http\Controllers\ModifyController;
use App\Http\Controllers\NewController;
use App\Http\Controllers\GotoreadyController;
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
Route::get('/setting', [indexController::class, 'index']) -> name('setting');

// modify画面
Route::get('/modify/{id}', [ModifyController::class, 'modify']);
Route::post('/modify/{id}', [ModifyController::class, 'modify_finish']) -> name('modify.update'); // 完了(modify -> setting移動)

// new画面
Route::get('/new', [NewController::class, 'index']);
Route::post('/new', [
    'uses' => 'App\Http\Controllers\NewController@add',
    'as' => 'new.add']);   // 追加

// gotoready画面
Route::get('/setting/gotoready/{id}', [indexController::class, 'gotoready'])->name('index.gotoready');
Route::post('/setting/{id}', [indexController::class, 'update']) -> name('index.update'); //gotoready -> setting移動