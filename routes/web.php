<?php

use App\Http\Controllers\JobController;
use App\Http\Controllers\RegisterdController;
use App\Http\Controllers\SessionController;
use Illuminate\Support\Facades\Route;


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

