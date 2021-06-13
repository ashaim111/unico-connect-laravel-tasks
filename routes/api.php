<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Route;
use Symfony\Component\Console\Question\Question;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

// Question 2 :Create a REST API in Laravel which will read 20K records at a time from MySQL or MongoDB database 
Route::get('/get-todo-list',[App\Http\Controllers\Api\TodoListController::class, 'todoListWithoutCache'])->name('get-todo-list');
Route::get('/get-todo',[App\Http\Controllers\Api\TodoListController::class, 'todoListWithCache'])->name('get-todo');


// Question 3 : Prepare SQL query such that there is a user table with column "grades".
Route::get('/get-user',[App\Http\Controllers\Api\UserController::class, 'getUserRecordsFromDB'])->name('get-user');