<?php

use Illuminate\Support\Facades\Route;

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
    return view('index');
});

Route::get('/laravel', function () {
    return view('welcome');
});


Route::get('/home','HomeController@index')->name('home');

Route::resource('turmas', 'TurmasController');
Route::resource('alunos', 'AlunosController');
Route::post('/atualiza-turma', 'TurmasController@updateRegistro')->name('turmas-update');
Route::post('/atualiza-aluno', 'AlunosController@updateRegistro')->name('alunos-update');
Route::get('/alunos-turma/list', 'AlunosController@listarAlunosTurma')->name('alunos-turma-view');
Route::post('/alunos-turma', 'AlunosController@listarAlunosTurmaSelect')->name('select-alunos-turma');
Route::post('/aluno-delete', 'AlunosController@destroy')->name('aluno-delete');
Route::post('/turma-delete', 'TurmasController@destroy')->name('turma-delete');





