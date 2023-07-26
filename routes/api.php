<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthorController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\GameController;
use App\Http\Controllers\BookmarkController;
use App\Http\Controllers\JoinController;


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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

// Author
Route::get('author', [AuthorController::class, 'readAll']);
Route::get('author/all', [AuthorController::class, 'readAll']);
Route::get('author/ig/{ig}', [UserController::class, 'readIG']);
Route::get('author/email/{email}/{password}', [UserController::class, 'readLoginEmail']);
Route::get('author/username/{username}/{password}', [UserController::class, 'readLoginUsername']);


Route::post('author', [AuthorController::class, 'create']);
Route::put('author/{id}', [AuthorController::class, 'update']);
Route::delete('author/{id}', [AuthorController::class, 'delete']);

// gamenews
Route::get('gamenews', [GameController::class, 'readAll']);
Route::get('gamenews/all', [GameController::class, 'readGameNewsAll']);
Route::get('gamenews/type/{type}', [GameController::class, 'readGameNewsType']);

Route::post('gamenews', [GameController::class, 'create']);
Route::put('gamenews/{id_gamenews}', [GameController::class, 'update']);
Route::delete('gamenews/{id_gamenews}', [GameController::class, 'delete']);


// User
Route::get('user', [UserController::class, 'readAll']);
Route::get('user/{id_user}', [UserController::class, 'readId']);
Route::get('user/email/{email}', [UserController::class, 'readEmail']);
Route::get('user/username/{username}', [UserController::class, 'readUsername']);
Route::get('user/ig/{ig}', [UserController::class, 'readIG']);
Route::get('user/email/{email}/{password}', [UserController::class, 'readLoginEmail']);
Route::get('user/username/{username}/{password}', [UserController::class, 'readLoginUsername']);

Route::post('user', [UserController::class, 'create']);
Route::put('user/{id_user}', [UserController::class, 'update']);
Route::delete('user/{id_user}', [UserController::class, 'delete']);


// Bookmark
Route::get('bookmark', [BookmarkController::class, 'readAll']);
Route::get('bookmark/all', [BookmarkController::class, 'readBookmarkAll']);
Route::get('bookmark/user/{user_id}', [BookmarkController::class, 'readBookmarkUser']);
Route::get('bookmark/user/{user_id}/{type}', [BookmarkController::class, 'readBookmarkType']);
Route::get('bookmark/{gamenews_id}/{user_id}', [BookmarkController::class, 'readBookmark']);
Route::get('bookmark/{gamenews_id}', [BookmarkController::class, 'readBookmarkId']);

Route::post('bookmark', [BookmarkController::class, 'create']);
Route::put('bookmark/{id_bookmark}', [BookmarkController::class, 'update']);
Route::delete('bookmark/{id_bookmark}', [BookmarkController::class, 'delete']);

