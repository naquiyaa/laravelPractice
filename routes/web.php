<?php

//importing the controller
namespace App\Http\Controllers\Auth;

use Illuminate\Support\Facades\Route;
use App\Http\Controller\Controller;


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
//we will define the rout eby giving the conroller and the function within the controller
//the reason that i have added the name part is because then wherever i need to call this page/view
//i will only need to refer it by the name which is register
//and so if i put the view in another directory, i wont be required to change that everywhere
Route::get('/register', [RegisterController::class, 'index'])->name('register');
Route::post('/register', [RegisterController::class, 'store'])->name('register');

Route::get('/posts', function () {
    return view('posts.index');
});
