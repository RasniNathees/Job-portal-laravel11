<?php

use App\Http\Controllers\JobController;
use App\Http\Controllers\RegisterdController;
use Illuminate\Support\Facades\Route;


Route::controller(JobController::class)->group(function(){
    Route::get('/','index');
}
);
Route::controller(RegisterdController::class)->group(function(){
    Route::get('/register','create');
    Route::post('/user','store');
}
);

