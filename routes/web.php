<?php

use App\Http\Livewire\Login;
use App\Http\Livewire\Staff;
use App\Http\Livewire\Patient;
use App\Http\Livewire\Dashboard;
use App\Http\Livewire\Observation;
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
Route::get('login', Login::class);
Route::middleware(['auth', 'web'])->group(function () {
    Route::get('', Dashboard::class);
    Route::get('patients', Patient::class);
    Route::get('staff', Staff::class);
    Route::get('observations', Observation::class);
});
