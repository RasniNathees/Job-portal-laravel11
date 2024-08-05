<?php

use App\Http\Controllers\EmployerController;
use App\Http\Controllers\JobController;
use App\Http\Controllers\RegisterdController;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\SessionController;
use Illuminate\Support\Facades\Route;

Route::get('search',SearchController::class);
Route::controller(JobController::class)->group(function(){
    Route::get('/','index');
}
);
Route::controller(RegisterdController::class)->group(function(){
    Route::get('/register','create');
    Route::post('/register','store');
}
);
Route::controller(SessionController::class)->group(function(){
    Route::get('/login','create')->name('Login');
    Route::post('/login','store');
    Route::post('/logout','destroy')->middleware('auth');

}
);

Route::controller(EmployerController::class)->group(function(){
    Route::get('/organization','create');
    Route::post('/organization','store');
})->middleware('auth');
