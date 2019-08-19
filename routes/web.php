<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('alunos',['as'=>'site.alunos','uses'=>'AlunoController@index']);
Route::get('/alunos/adicionar',['as'=>'site.alunos.adicionar','uses'=>'AlunoController@adicionar']);
Route::post('/alunos/salvar',['as'=>'site.alunos.salvar','uses'=>'AlunoController@salvar']);
Route::get('/alunos/editar/{id}', ['as' =>'site.alunos.editar','uses'=>'AlunoController@editar']);
Route::put('/alunos/editar/atualizar/{id}', ['as' =>'site.alunos.atualizar','uses'=>'AlunoController@atualizar']);
Route::get('/alunos/editar/deletar/{id}', ['as' =>'site.alunos.deletar','uses'=>'AlunoController@deletar']);




Route::get('/turmas',['as'=>'site.turmas','uses'=>'TurmaController@index']);
Route::get('/turmas/adicionar',['as'=>'site.turmas.adicionar','uses'=>'TurmaController@adicionar']);
Route::post('/turmas/salvar',['as'=>'site.turmas.salvar','uses'=>'TurmaController@salvar']);
Route::get('/turmas/editar/{id}', ['as' =>'site.turmas.editar','uses'=>'TurmaController@editar']);
Route::put('/turmas/editar/atualizar/{id}', ['as' =>'site.turmas.atualizar','uses'=>'TurmaController@atualizar']);
Route::get('/turmas/editar/deletar/{id}', ['as' =>'site.turmas.deletar','uses'=>'TurmaController@deletar']);
Route::get('/turmas/listaAluno/{id}', ['as' =>'site.turmas.listaaluno','uses'=>'AlunoTurmaController@listaAluno']);
Route::get('/turmas/salvaAluno/{id}/{turmaID}', ['as' =>'site.turmas.salvaaluno','uses'=>'AlunoTurmaController@salvaAluno']);
Route::get('/turmas/retirarAluno/{id}/{turmaID}', ['as' =>'site.turmas.retiraraluno','uses'=>'AlunoTurmaController@retiraAluno']);


Route::get('/turmas/alunos/{id}',['as'=>'site.turmas.alunos','uses'=>'AlunoTurmaController@index']);
