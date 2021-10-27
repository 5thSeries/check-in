<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GroupController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\WelcomeController;

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

Route::get('/', WelcomeController::class);

Route::middleware(['auth'])->group(function () {
    Route::resource('groups', GroupController::class);
    Route::resource('students', StudentController::class);
    Route::get('{group}/checkin');
    Route::get('{group}/{student}/checkin');
    Route::post('{group}/{student}/checkin');
});

require __DIR__.'/auth.php';
