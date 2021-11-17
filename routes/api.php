<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\FaceBookUserControllerAPI;
use App\Http\Controllers\API\FacebookPostController;

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

Route::post('login',[FaceBookUserControllerAPI::class,'login']);
Route::post('register',[FaceBookUserControllerAPI::class,'register']);
Route::post('reset-password',[FaceBookUserControllerAPI::class,'resetPassword']);



Route::get('get-all-posts',[FacebookPostController::class,'getAllPosts']);
Route::get('get-post',[FacebookPostController::class,'getPost']);
Route::get('search-post',[FacebookPostController::class,'searchPost']);
