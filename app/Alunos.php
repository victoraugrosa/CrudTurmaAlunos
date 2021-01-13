<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Alunos extends Model
{
    protected $table = 'alunos';
    protected $fillable = [
        'id',
        'nome',
        'sexo',
        'data_nasc',
        'id_turma',
        'deleted_at',
        'created_at',
        'updated_at',
    ];
    public function turma(){
        return $this->belongsTo(Turma::class, 'id_turma');
    }
}
