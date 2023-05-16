<?php

use Illuminate\Support\Facades\Route;
// use App\Http\Controllers\PracticeController;

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
Route::get('/practice', [App\Http\Controllers\PracticeController::class, 'sample']);
Route::get('/practice2', [App\Http\Controllers\PracticeController::class, 'sample2']);
Route::get('/practice3', [App\Http\Controllers\PracticeController::class, 'sample3']);

Route::get('/', function () {
    return view('welcome');
});

//ルーティング
// Route::get('practice', function() {
//     return response('practice');
// });
// Route::get('practice2', function() {
//     $test = 'practice2';
// return response($test);
// });
// Route::get('practice3', function() {
//     $message="test";
// return response($message);
// });