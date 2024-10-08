<?php

use App\livewire\Auth\AuthLogin;
use App\livewire\Auth\AuthRegister;
use App\livewire\Auth\AuthHomepage;
use App\livewire\Auth\AuthDashboard;
use App\livewire\Auth\AuthContactUs;
use App\livewire\Auth\AuthAdminDashboard;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/login', AuthLogin::class)->name('login');
Route::get('/register', AuthRegister::class)->name('register');
Route::get('/homepage', AuthHomepage::class)->name('homepage');
Route::get('/dashboard', AuthDashboard::class)->name('dashboard');
Route::get('/contactus', AuthContactUs::class)->name('contactus');
Route::get('/admindashboard', AuthAdminDashboard::class)->name('admindashboard');