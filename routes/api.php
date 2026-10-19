<?php

use App\Http\Controllers\TaskController;
use Illuminate\Support\Facades\Route;

// 1. Rota customizada para marcar como concluída (deve vir ANTES do apiResource)
Route::put('tasks/{task}/complete', [TaskController::class, 'complete']);

// 2. Rotas do CRUD padrão
Route::apiResource('tasks', TaskController::class);