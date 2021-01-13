<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">

        <title>Adicionar Turmas</title>

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
            <form action="{{route('turmas.store')}}" method="post">
                @csrf

                <label for="nome_turma">Nome:</label>
                <input type="text" name="nome_turma">
                <br/>
                <br/>

                <button type="submit" class="btn btn-primary">Cadastrar</button>

            </form>

    </body>
</html>

