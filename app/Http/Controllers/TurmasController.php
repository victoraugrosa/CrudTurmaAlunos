<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Turma;
use Carbon\Carbon;
use Illuminate\Routing\Route;

class TurmasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $rota_atual = 'turmas.index';
         return view('list_turmas_alunos', ['dados' => Turma::all()->whereNull('deleted_at'), 'rota_atual' => $rota_atual]);

    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('add_turmas_alunos', ['rota_atual' => 'turmas.create']);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Turma::create([
            'nome_turma' => $request->nome_turma
        ]);

        return redirect()->action('TurmasController@index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

    }

    public function updateRegistro(Request $request)
    {
        $id = $request->id;
        $turma = Turma::where('id', $id);

        $turma->update([
            'nome_turma'    => $request->nome_turma,
        ]);


        return redirect()->action('TurmasController@index');
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
        $turma = Turma::where('id', $id);

        $turma->update([
            'deleted_at'    => Carbon::now()
        ]);


        return redirect()->action('TurmasController@index');
    }
}
