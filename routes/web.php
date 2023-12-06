<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\ProjectsController;
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

Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/projects', [ProjectsController::class, 'index'])->name('projects');
Route::get('/projects/{project:uuid}', [ProjectsController::class, 'single'])->name('projects.single');
Route::get('/contact', [ContactController::class, "index"])->name('contact');
Route::post('/contact', [ContactController::class, "sendMsg"]);
