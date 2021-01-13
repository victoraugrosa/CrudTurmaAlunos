<?php

use App\Turma;
use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class AlunosTableSeeder extends Seeder
{
    static $nomes = array(
        'Pedro de Almeida',
        'João Silva Costa',
        'Alberto Fernandes Souza',
        'Victor Teixeira Rubens',
        'Fulano de Tal',
        'Bertrano Mendes',
        'Felipe Pereira Muller',
        'Maicon Ginder',
        'Harry Potter',
        'Michael Mayers'
    );

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        foreach (self::$nomes as $nome){
            $turma = Turma::find(rand(1,3));
            DB::table('alunos')->insert([
                'nome'      => $nome,
                'sexo'      => rand(0, 1) == 1 ? 'M' : 'F',
                'data_nasc' => Carbon::now()->subYears(rand(18,70))->subDays(rand(0, 365)),
                'id_turma'  => $turma->id
            ]);
        }
    }
}
