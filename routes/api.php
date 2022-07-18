<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Api\DefesaController;
use App\Http\Controllers\Api\PessoaController;
use App\Http\Controllers\Api\ProgramaController;
use App\Http\Controllers\Api\PesquisaController;


Route::get('/defesas', [DefesaController::class, 'index']);

Route::get('/programas', [ProgramaController::class, 'index']);
Route::get('/programas/{codare}', [ProgramaController::class, 'show']);
Route::get('/programas/docentes/{codare}', [ProgramaController::class, 'listarDocentes']);
Route::get('/programas/discentes/{codare}', [ProgramaController::class, 'listarDiscentes']);
Route::get('/programas/egressos/{codare}', [ProgramaController::class, 'listarEgressos']);
Route::get('/programas/docente/{codpes}', [ProgramaController::class, 'docente']);
Route::get('/programas/discente/{codpes}', [ProgramaController::class, 'discente']);
Route::get('/programas/egresso/{codpes}', [ProgramaController::class, 'egresso']);

Route::get('/docentes', [PessoaController::class, 'listarDocentes']);
Route::get('/estagiarios', [PessoaController::class, 'listarEstagiarios']);
Route::get('/monitores', [PessoaController::class, 'listarMonitores']);
Route::get('/servidores', [PessoaController::class, 'listarServidores']);
Route::get('/chefes_administrativos', [PessoaController::class, 'listarChefesAdministrativos']);
Route::get('/chefes_departamento', [PessoaController::class, 'listarChefesDepartamento']);


# Pesquisa
Route::get('/pesquisa', [PesquisaController::class, 'contarPesquisasAtivasPorTipo']);
Route::get('/pesquisa/iniciacao_cientifica', [PesquisaController::class, 'listarIniciacaoCientifica']);
Route::get('/pesquisa/pos_doutorandos', [PesquisaController::class, 'listarPesquisasPosDoutorandos']);
Route::get('/pesquisa/projetos_pesquisa', [PesquisaController::class, 'listarProjetosPesquisa']);
Route::get('/pesquisa/pesquisadores_colaboradores', [PesquisaController::class, 'listarPesquisadoresColaboradores']);



