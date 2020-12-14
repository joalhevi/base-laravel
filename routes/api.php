<?php

use App\Http\Controllers\Api\Abilities\AbilitiesController;
use App\Http\Controllers\Api\Auth\AuthController;
use App\Http\Controllers\Api\Roles\RolesController;
use App\Http\Controllers\Api\Users\UsersController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::post('/login',[AuthController::class,'login']);

Route::middleware('auth:sanctum')->group( function () {

    Route::get('/user',function (Request $request){
       return  $request->user();
    });

    Route::post('/logout',[AuthController::class,'logout']); // ruta para cerrar sesion

    Route::get('abilities',[AbilitiesController::class,'index']);  // obtener todas las habilidades

    Route::apiResource('roles',RolesController::class); // rutas rest de roles

    Route::apiResource('users',UsersController::class); // rutas rest de usuarios

});
