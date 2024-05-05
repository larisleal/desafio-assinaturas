<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\CadastroController;
use App\Http\Controllers\AssinaturaController;
use App\Http\Controllers\FaturaController;

// Rotas para Cadastros
Route::get('cadastros', [CadastroController::class, 'getAll']);
Route::post('cadastro/create', [CadastroController::class, 'create']);
Route::put('cadastro/update/{id}', [CadastroController::class, 'update']);
Route::delete('cadastro/delete/{id}', [CadastroController::class, 'delete']);

// Rotas para Assinaturas
Route::get('assinaturas', [AssinaturaController::class, 'getAll']);
Route::post('assinatura/create', [AssinaturaController::class, 'create']);
Route::put('assinatura/update/{id}', [AssinaturaController::class, 'update']);
Route::delete('assinatura/delete/{id}', [AssinaturaController::class, 'delete']);

// Rotas para Faturas
Route::get('faturas', [FaturaController::class, 'getAll']);
Route::post('fatura/create', [FaturaController::class, 'create']);
Route::put('fatura/update/{id}', [FaturaController::class, 'update']);
Route::delete('fatura/delete/{id}', [FaturaController::class, 'delete']);
