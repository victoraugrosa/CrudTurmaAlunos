<?php

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class TurmasTableSeeder extends Seeder
{
    static $turmas = array(
        'Matemática Aplicada',
        'Teoria Geral de Sistemas',
        'Programação Orientada a Objetos'
    );

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        foreach (self::$turmas as $turma)
            DB::table('turmas')->insert([
                'nome_turma'      => $turma
            ]);
    }
}
