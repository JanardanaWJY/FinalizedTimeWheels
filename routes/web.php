<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

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
    return redirect('landing');
});

Route::get('/landing', function () {
    return view('landing');
});

Route::get('/signin', function () {
    return view('signin');
});

Route::get('/signup', function () {
    return view('signup');
});

Route::get('/chatlist', function () {
    return view('chat_list');
});

Route::post('/signinaction', [UserController::class, 'login']);
Route::post('/signupaction', [UserController::class, 'register']);
Route::post('/logoutaction', [UserController::class, 'logout']);
Route::get('/gotodashboard', [UserController::class, 'goToDashboard']);