<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
            <!-- Latest compiled and minified CSS -->
            <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

            <!-- jQuery library -->
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

            <!-- Latest compiled JavaScript -->
            <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
            <!-- Fonts -->
            <!-- <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet"> -->

            <!-- Styles -->
        <title>Bussola</title>
        <link rel="stylesheet" href="css/app.css">
    </head>
    <body>
            @if($rota_atual == 'turmas.create')
                <form  action="{{route('turmas.store')}}" method="post">
            @endif
            @if ( $rota_atual == 'alunos.create')
                <form action="{{route('alunos.store')}}" method="post">
            @endif

                @csrf

                @if($rota_atual == 'turmas.create')
                <label for="cadastro_turma">Cadastrar Turma</label>
                <br/>
                <br/>
                <div id="div_add_turma">
                    <label for="nome_turma">Nome:</label>
                    <br/>
                    <input type="text" name="nome_turma">
                    <br/>
                    <br/>
                </div>
                @endif
                @if($rota_atual == 'alunos.create')
                <label for="cadastro_turma">Cadastrar Aluno</label>
                <br/>
                <br/>
                <div id="div_add_aluno">
                    <label for="nome">Nome:</label>
                    <input type="text" name="nome">
                    <br/>
                    <br/>

                    <label for="sexo">Sexo:</label>
                    <select name="sexo" id="sexo">
                        <option value="M">Masculino</option>
                        <option value="F">Feminino</option>
                    </select>
                    <br/>
                    <br/>

                    <label for="data_nasc">Data de Nascimento:</label>
                    <input type="date" name="data_nasc">
                    <br/>
                    <br/>

                    <label for="id_turma">Turma:</label>
                    <select name="id_turma" id="id_turma">
                        <option selected value="null">Sem turma</option>
                        @foreach($turmas as $turma)
                            <option value="{{$turma->id}}">{{$turma->nome_turma}}</option>
                        @endforeach
                    </select>
                    <br/>
                    <br/>
                </div>
                @endif

                <button type="submit" class="btn btn-primary">Cadastrar</button>

            </form>

    </body>
</html>

