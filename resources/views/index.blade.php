<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">

        <title>Index Empresas</title>

        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

        <!-- jQuery library -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

        <!-- Latest compiled JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
        <!-- Fonts -->
        <!-- <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet"> -->

        <!-- Styles -->
    </head>
    <body>
        <div>
            <center>
                <h1>Escolha uma opção:</h1>
                <br/>
                <a class="btn btn-warning" href="{{route('turmas.index')}}">Listar turmas</a>
                <br/>
                <br/>
                <a class="btn btn-warning" href="{{route('alunos.index')}}">Listar Pessoas</a>
                <br/>
                <br/>
                <a class="btn btn-primary" href="{{route('turmas.create')}}">Cadastrar Turma</a>
                <br/>
                <br/>
                <a class="btn btn-primary" href="{{route('alunos.create')}}">Cadastrar Aluno</a>
                <br/>
                <br/>
                <a class="btn btn-primary" href="{{route('alunos-turma-view')}}">Lista Alunos por Turma</a>
            </center>
        </div>
    </body>
</html>
