<?php

use App\Http\Controllers\AlakhotahJoinRequestController;
use Illuminate\Support\Facades\Route;

Route::get('test', function () {
	dd(Storage::disk('digitalocean')->allFiles());
});

Route::view('/', 'home')->name('home');
Route::view('join-request', 'join-request')->name('join-request');
Route::post('join-request', [AlakhotahJoinRequestController::class, 'store'])->name('join-request.store');