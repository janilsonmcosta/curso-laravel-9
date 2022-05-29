<?php

use App\Http\Controllers\{
    UserController
};

use Illuminate\Support\Facades\Route;

route::get('/users', [UserController::class, 'index'])->name('users.index');
route::get('/users/{id}', [UserController::class, 'show'])->name('users.show');

Route::get('/', function () {
    return view('welcome');
});
