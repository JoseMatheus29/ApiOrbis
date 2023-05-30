<?php
$namespace = 'App\Http\Controllers\Api';

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\Api\StageController;


Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::namespace('Api') -> group(function(){
    //Rotas Stage
    Route::post('/addStage',[StageController::class, 'add']);
    Route::get('/list', [StageController::class, 'listAll']);
    Route::get('/list/{id}', [StageController::class, 'listOne']);
    Route::put('/update/{id}', [StageController::class, 'update']);
    Route::delete('/delete/{id}', [StageController::class, 'delete']);

});