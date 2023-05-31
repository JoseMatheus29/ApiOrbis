<?php
$namespace = 'App\Http\Controllers\Api';

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\Api\StageController;
use App\Http\Controllers\Api\ToolsController;

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::namespace('Api') -> group(function(){
    //Rotas Stage
    Route::post('/addStage',[StageController::class, 'add']);
    Route::get('/listStage', [StageController::class, 'listAll']);
    Route::get('/listStage/{id}', [StageController::class, 'listOne']);
    Route::put('/updateStage/{id}', [StageController::class, 'update']);
    Route::delete('/deleteStage/{id}', [StageController::class, 'delete']);

    //Rotas Tools
    Route::post('/addTools',[ToolsController::class,'add']);
    Route::get('/listTools', [ToolsController::class, 'listAll']);
    Route::get('/listTools/{id}', [ToolsController::class, 'listOne']);
    Route::put('/updateTool/{id}', [ToolsController::class,'update']);
    Route::delete('/deleteTool/{id}',[ToolsController::class, 'delete']);

});