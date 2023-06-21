<?php
$namespace = 'App\Http\Controllers\Api';

use App\Http\Controllers\Api\ExtraMaterialsController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\Api\StageController;
use App\Http\Controllers\Api\StepByStepControll;
use App\Http\Controllers\Api\ToolsController;


Route::namespace('Api') -> group(function(){
    //Rotas Stage
    Route::post('Stage/add',[StageController::class, 'add']);
    Route::get('Stage/list', [StageController::class, 'listAll']);
    Route::get('Stage/list/{id}', [StageController::class, 'listOne']);
    Route::get('Stage/list/{id}/{tipo}', [ToolsController::class, 'listAespecifc']);
    Route::post('Stage/update/{id}', [StageController::class, 'update']);
    Route::delete('Stage/delete/{id}', [StageController::class, 'delete']);

    //Rotas Tools
    Route::post('Tools/add',[ToolsController::class,'add']);
    Route::get('Tools/list', [ToolsController::class, 'listAll']);
    Route::get('Tools/list/{id}', [ToolsController::class, 'listOne']);
    Route::get('Tools/list/{id}/{tipo}', [ToolsController::class, 'listAespecifc']);
    Route::post('Tools/update/{id}', [ToolsController::class,'update']);
    Route::delete('Tools/delete/{id}',[ToolsController::class, 'delete']);

    //Route Step_Step
    Route::post('Step/add',[StepByStepControll::class,'add']);
    Route::get('Step/list', [StepByStepControll::class, 'listAll']);
    Route::get('Step/list/{id}', [StepByStepControll::class, 'listOne']);
    Route::get('Step/list/{id}/{tipo}', [StepByStepControll::class, 'listAespecifc']);
    Route::post('Step/update/{id}', [StepByStepControll::class,'update']);
    Route::delete('Step/delete/{id}',[StepByStepControll::class, 'delete']);

    //Route Extra_Materials
    Route::post('ExtraMaterials/add',[ ExtraMaterialsController::class,'add']);
    Route::get('ExtraMaterials/list', [ExtraMaterialsController::class, 'listAll']);
    Route::get('ExtraMaterials/list/{id}', [ExtraMaterialsController::class, 'listOne']);
    Route::get('ExtraMaterials/list/{id}/{tipo}', [ExtraMaterialsController::class, 'listAespecifc']);
    Route::post('ExtraMaterials/update/{id}', [ExtraMaterialsController::class,'update']);
    Route::delete('ExtraMaterials/delete/{id}',[ExtraMaterialsController::class, 'delete']);

});