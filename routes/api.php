<?php
$namespace = 'App\Http\Controllers';

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\StageController;

Route::get('/readstage',[StageController::class, 'insertStage']);

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
