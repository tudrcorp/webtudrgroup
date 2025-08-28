<?php


use Livewire\Volt\Volt;
use App\Livewire\GuestRegister;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GuestsController;

Route::get('/', function () {
    return view('welcome');
})->name('home');

// Route::view('/guest/register', function () {
//     return view('form');
// })->name('guest.register');

Route::view('guest', 'form')->name('guest.register');

Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::middleware(['auth'])->group(function () {
    Route::redirect('settings', 'settings/profile');

    Volt::route('settings/profile', 'settings.profile')->name('settings.profile');
    Volt::route('settings/password', 'settings.password')->name('settings.password');
    Volt::route('settings/appearance', 'settings.appearance')->name('settings.appearance');
});

require __DIR__.'/auth.php';