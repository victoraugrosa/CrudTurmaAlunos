<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Turma extends Model
{
    protected $table = 'turmas';
    protected $fillable = [
        'id',
        'nome_turma',
        'deleted_at',
        'created_at',
        'updated_at',
    ];
    public function alunos(){
        return $this->hasMany(Alunos::class, 'id_turma');
    }

}
