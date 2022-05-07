<?php

use App\Http\Controllers\ProjectController;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

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

//-------------------- Guest Pages --------------------------------------//
Route::get('/', function () {
    return Inertia::render('Welcome');
       
});

Route::resource('projects', ProjectController::class);

Route::get('/about', function() {
    return Inertia::render('About');
});

Route::get('/contact', function() {
    return Inertia::render('Contact');
});

Route::get('/resume', function() {
    return Inertia::render('Resume');
});


//---------------- Admin Pages ---------------------------------------------//
Route::get('/dashboard', function () {
    return Inertia::render('Dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');


require __DIR__.'/auth.php';
