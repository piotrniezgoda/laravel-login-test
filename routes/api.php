<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\User;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::get('/user/{id}', function (string $id) {
    return ["id"=>$id, "name"=>"user {$id}", "owner"=>false];
});

Route::get('/user/{user}', function (User $user) {
    return $user;
});

Route::get('/params', function (Request $request) {
    $queryParams = $request->input("test");
    return $queryParams;
});

Route::get('/car', [App\Http\Controllers\CarController::class, 'single']);
Route::get('/flight', [App\Http\Controllers\FlightController::class, 'single']);

Route::post('/login', [App\Http\Controllers\AuthController::class, 'login']);
Route::post('/register', [App\Http\Controllers\UserController::class, 'register']);

Route::prefix('user')->group(function () {
    Route::post('/delete', [App\Http\Controllers\UserController::class, 'delete'])
->middleware('auth:sanctum');
});

Route::get('/dashboard', [App\Http\Controllers\DashboardController::class, 'loginData'])->middleware('auth:sanctum');
