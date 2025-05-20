<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\PlanEstudioController;
use App\Http\Controllers\Api\CursoController;
use App\Http\Controllers\Api\ModuloController;
use App\Http\Controllers\Api\MicrocredencialController;
use App\Http\Controllers\Api\ProgramaEstudioController;
use App\Http\Controllers\Api\CampusController;
use App\Http\Controllers\Api\CompetenciaController;

Route::prefix('api')->group(function () {
    Route::get('/planestudios', [PlanEstudioController::class, 'index']);
    Route::get('/cursos', [CursoController::class, 'index']);
    Route::get('/modulos', [ModuloController::class, 'index']);
    Route::get('/microcredenciales', [MicrocredencialController::class, 'index']);
    Route::get('/programaestudios', [ProgramaEstudioController::class, 'index']);
    Route::get('/campus', [CampusController::class, 'index']);
    Route::get('/competencias', [CompetenciaController::class, 'index']);
});
