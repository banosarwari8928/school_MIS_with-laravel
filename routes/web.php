<?php

use Illuminate\Support\Facades\Route;
use Livewire\Volt\Volt;

Route::get('/', function () {
    return view('welcome');
})->name('home');
Route::middleware(['auth', 'verified'])->group(function () {
    Route::view('dashboard', 'dashboard')->name('dashboard');
});
Route::view('profile','profile')->middleware(['auth'])->name('profile');

    Route::prefix("dashboard")->middleware(['auth', 'verified'])->group(function(){
        Route::view('dashboard', 'dashboard')->name('dashboard');
        Route::view("/emplyee","livewire.employee.index");
        Route::view("/contract","liverwire.contract.index");
        Route::view("/school","liverwire.school.index");
        Route::view("/department","liverwire.department.index");
        Route::view("/department","liverwire.designation.index");
        Route::view("/salary","liverwire.salary.index");
        Route::view("/payment","liverwire.payment.index");
        Route::view("/payroll","liverwire.payroll.index");
        // Route::view('/','dashboard');
        // Route::view('/profile','profile');
    });
// Route::middleware(['auth'])->group(function () {
//     Route::redirect('settings', 'settings/profile');

//     Volt::route('settings/profile', 'settings.profile')->name('settings.profile');
//     Volt::route('settings/password', 'settings.password')->name('settings.password');
//     Volt::route('settings/appearance', 'settings.appearance')->name('settings.appearance');
// });

require __DIR__.'/auth.php';
