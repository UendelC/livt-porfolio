<?php

use App\Http\Controllers\ProjectController;
use App\Http\Controllers\SkillController;
use Illuminate\Foundation\Application;
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

Route::inertia(
    '/',
    'Welcome',
    [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
        'laravelVersion' => Application::VERSION,
        'phpVersion' => PHP_VERSION,
    ]
);

Route::middleware(['auth', 'verified'])->group(
    function () {
        Route::inertia('/dashboard', 'Dashboard')->name('dashboard');
        Route::resource('skills', SkillController::class);
        Route::resource('projects', ProjectController::class);
    }
);

require __DIR__.'/auth.php';
