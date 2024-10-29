<?php

use App\Http\Controllers\api\EstudianteController;
use App\Http\Controllers\api\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});


Route::post('register', [UserController::class, "register"]);
Route::post('login', [UserController::class, "login"]);
Route::apiResource("estudiantes", EstudianteController::class);


Route::group([
    'middleware' => ["auth:api"],
], function () {

    Route::get('profile', [UserController::class, "profile"]);
    Route::get('logout', [UserController::class, "logout"]);
    //Route::resource('permission', PermissionController::class);

    
});
