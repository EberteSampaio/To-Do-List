<?php

use App\Http\Controllers\TaskController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');


Route::get('/list',[TaskController::class,'allTask'])->name('index_task');
Route::post('/create',[TaskController::class,'createTask'])->name('create_task');
