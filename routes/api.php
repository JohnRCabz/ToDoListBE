<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ToDoController;

// ToDo List API Routes
Route::get('/tasks', [ToDoController::class, 'index']);
Route::post('/tasks', [ToDoController::class, 'store']);
Route::get('/tasks/{id}', [ToDoController::class, 'show']);
Route::put('/tasks/{id}', [ToDoController::class, 'update']);
Route::delete('/tasks/{id}', [ToDoController::class, 'destroy']);