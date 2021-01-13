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
    </head>
    <body>
        <h2>Escolha uma opção:</h2>
        <br/>
        <a class="btn btn-primary" href="{{route('home')}}">Home</a>
        <br/>
        <br/>
        <h3>Opções</h3>
            <form action="{{route('select-alunos-turma')}}" method="post">
                @csrf

                <select name="id_turma" id="id_turma">
                    <option <?php if(empty($dado->id_turma)) echo 'selected'?> value="null">Sem turma</option>
                        @foreach($turmas as $turma)
                            <option <?php if(!empty($id_turma) && $id_turma == $turma->id) echo 'selected'?> value="{{$turma->id}}">{{$turma->nome_turma}}</option>
                        @endforeach
                </select>
                <button type="submit" class="btn btn-primary">Alterar</button>

            </form>
            @if(!empty($dados))
                <table class="table table-dark">
                    <tr>
                        <th>ID</th>
                        <th>Nome</th>
                        <th>Sexo</th>
                        <th>Data Nascimento</th>
                    </tr>
                    <tbody>
                        @foreach ($dados as $dado)
                        <tr>
                            <td><input readonly type="number" name="id" value="{{$dado->id}}"></td>
                            <td><input style="width: 80%" type="text" name="nome" value="{{$dado->nome}}"></td>
                            <td><input type="text" name="sexo" value="{{$dado->sexo}}"></td>
                            <td><input type="date" name="data_nasc" value="{{$dado->data_nasc}}"></td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            @endif
    </body>
</html>

<!-- <script>
    function teste ($id_delete){
        $(document).ready(function(){
            $.ajax({
                type: "POST",
                url:"http://localhost:8000/"

            });
        });
    }
</script> -->
