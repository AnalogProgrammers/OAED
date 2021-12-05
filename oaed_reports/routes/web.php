<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UnemployedController;
use App\Http\Controllers\CompanyController;
use App\Http\Controllers\FormController;
use App\Http\Controllers\JobController;
use App\Http\Controllers\LocationsController;
use App\Http\Controllers\MeetingController;
use App\Http\Controllers\TrainingController;

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
Route::get('/',[UnemployedController::class, 'index'])->name('index')->middleware('auth');
Route::get('/home',[UnemployedController::class, 'index'])->name('index')->middleware('auth');
Route::get('/jobs', [JobController::class, 'index'])->name('jobs')->middleware('auth');
Route::get('/meeting',[MeetingController::class, 'index_meeting'])->name('meeting')->middleware('auth');
Route::get('/meetings',[MeetingController::class, 'index_meetings'])->name('meetings')->middleware('auth');
Route::get('/profile',[UnemployedController::class, 'profile'])->name('profile')->middleware('auth');
Route::get('/training',[TrainingController::class, 'index'])->name('training')->middleware('auth');

Route::get('/diagnostics', function () {return view('diagnostics');})->name('diagnostics')->middleware('auth');


Auth::routes();