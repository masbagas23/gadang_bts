<?php

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

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::group(['middleware' => 'api', 'namespace'=>'App\Http\Controllers'], function ($router) {
    // Auth
    Route::post('login', 'AuthController@login');
    Route::post('register', 'AuthController@register');

    // Checklist
    Route::apiResource('checklist', 'ChecklistController');

    // Checklist Item
    Route::group(['prefix'=>'checklist'], function($router) {
        Route::put('{checklist_id}/item/rename/{id}', 'ChecklistItemController@rename');
        Route::apiResource('{checklist_id}/item', 'ChecklistItemController');
    });
});
