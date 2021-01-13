<?php

namespace App\Http\Controllers;

use App\Alunos;
use App\Http\Controllers\Controller;
use App\Turma;
use Carbon\Carbon;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;


class AlunosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {
        $rota_atual = 'alunos.index';
        $alunos = Alunos::all()->whereNull('deleted_at');
        $turmas = Turma::all()->whereNull('deleted_at');

        foreach($alunos as $aluno){
            $turma = Turma::where('id', $aluno->id_turma)->whereNull('deleted_at')->first();
            $aluno->turma = isset($turma->nome_turma) ? $turma->nome_turma : "Sem Turma";
        }

        return view ('list_turmas_alunos', [ 'dados' => $alunos,'turmas' => $turmas,'rota_atual' => $rota_atual]);
    }

    public function listarAlunosTurmaSelect(Request $request)
    {
        $alunos_turma = Alunos::all()->where('id_turma', $request->id_turma)->whereNull('deleted_at');

        return view('list_alunos_por_turma', ['dados' =>$alunos_turma, 'turmas' =>  Turma::all()->whereNull('deleted_at'), 'id_turma'=> $request->id_turma ]);


    }

    public function listarAlunosTurma(Request $request)
    {
         return view('list_alunos_por_turma', ['dados' =>'', 'turmas' =>  Turma::all()->whereNull('deleted_at'),  'id_turma'=> '' ]);

    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('add_turmas_alunos', ['turmas' => Turma::all()->whereNull('deleted_at'), 'rota_atual' => 'alunos.create']);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Alunos::create([
            'nome'  => $request->nome,
            'sexo'  => $request->sexo,
            'data_nasc'  => $request->data_nasc,
        ]);

        return redirect()->action('AlunosController@index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function updateRegistro(Request $request)
    {
        $id = $request->id;

        $aluno = Alunos::where('id', $id);

        $aluno->update([
            'nome'      => $request->nome,
            'sexo'      => $request->sexo,
            'data_nasc' => $request->data_nasc,
            'id_turma'  => $request->id_turma
        ]);

        return redirect()->action('AlunosController@index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $id = $request->id;

        $aluno = Alunos::where('id', $id);

        $aluno->update([
            'deleted_at'  => Carbon::now()
        ]);

        return redirect()->action('AlunosController@index');
    }
}
