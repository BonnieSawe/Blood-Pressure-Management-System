<?php

use App\Http\Livewire\Login;
use App\Http\Livewire\Staff;
use App\Http\Livewire\Patient;
use App\Http\Livewire\Dashboard;
use App\Http\Livewire\Observation;
use App\Http\Livewire\CreatePatient;
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
Route::get('login', Login::class)->name('login');
Route::middleware(['auth', 'web'])->group(function () {
    Route::get('', Dashboard::class)->name('dashboard');
    Route::get('patients', Patient::class)->name('patients');
    Route::get('patients/create', CreatePatient::class)->name('patients.create');
    Route::get('staff', Staff::class)->name('staff');
    Route::get('observations', Observation::class)->name('observations');
});
