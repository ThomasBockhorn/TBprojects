<?php

use Inertia\Inertia;
use App\Models\Project;
use Illuminate\Support\Facades\Route;
use Illuminate\Foundation\Application;
use App\Http\Controllers\ProjectController;

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

Route::resource('/projects', ProjectController::class);

Route::get('/contact', function () {
    return Inertia::render('Contact');
});

Route::get('/resume', function () {
    return Inertia::render('Resume');
});


//---------------- Admin Pages ---------------------------------------------//
Route::get('/dashboard', function () {
    $projects = Project::latest()->paginate(10);;
    return Inertia::render('Dashboard', ['projects' => $projects]);
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/addProject', function() {
    return Inertia::render('AddProject');
})->middleware(['auth', 'verified'])->name('addProject');

Route::get('/editProject', function() {
    return Inertia::render('EditProject');
})->middleware(['auth', 'verified'])->name('editProject');

require __DIR__ . '/auth.php';
