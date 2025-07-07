<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TemplateController;
use App\Http\Controllers\CategoryController;
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

// Route::get('/', function () {
//     return view('welcome');
// })->name('home');

Route::get('/intros', [App\Http\Controllers\IntroController::class, 'show']);
Route::get('/test', [App\Http\Controllers\IntroController::class, 'testfun']);
// delete two routes (about, contact)


Route::get('/', [TemplateController::class, 'index'])->name('homepage');
Route::get('/about', [TemplateController::class, 'about'])->name('aboutpage');
Route::get('/post', [TemplateController::class, 'post'])->name('postpage');
Route::get('/contact', [TemplateController::class, 'contact'])->name('contactpage');

// Backend
Route::get('/table', [App\Http\Controllers\BackendTemplateController::class, 'tablefun'])->name('tablepage');

Route::resource('categories', CategoryController::class);