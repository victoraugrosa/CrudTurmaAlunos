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

            <table class="table table-dark">
                <tr>
                    @if($rota_atual == 'turmas.index')
                    <th>Nome</th>
                    @endif
                    @if($rota_atual == 'alunos.index')
                    <th>ID</th>
                    <th>Nome</th>
                    <th>Sexo</th>
                    <th>Data Nascimento</th>
                    <th>Turma</th>
                    @endif
                    <th>Opções</th>
                </tr>
                <tbody>
                    @foreach ($dados as $dado)
                    <tr>
                        @if($rota_atual == 'turmas.index')
                            <form action="{{route('turmas-update')}}" method="post">
                                <input hidden type="number" name="id" value="{{$dado->id}}">
                                <td><input style="width: 80%" type="text" name="nome_turma" value="{{$dado->nome_turma}}"></td>
                        @endif
                        @if ( $rota_atual == 'alunos.index')
                            <form action="{{route('alunos-update')}}" method="post">
                                <td><input readonly type="number" name="id" value="{{$dado->id}}"></td>
                                <td><input style="width: 80%" type="text" name="nome" value="{{$dado->nome}}"></td>
                                <td><input type="text" name="sexo" value="{{$dado->sexo}}"></td>
                                <td><input type="date" name="data_nasc" value="{{$dado->data_nasc}}"></td>
                                <td>
                                    <select name="id_turma" id="id_turma">
                                        <option <?php if(empty($dado->id_turma)) echo 'selected'?> value="null">Sem turma</option>
                                    @foreach($turmas as $turma)
                                        <option <?php if($dado->id_turma == $turma->id) echo 'selected'?> value="{{$turma->id}}">{{$turma->nome_turma}}</option>
                                    @endforeach
                                    </select>
                                </td>
                        @endif

                             @csrf
                                <td>
                                    <button type="submit" class="btn btn-primary">Alterar</button>
                            </form>
                        @if($rota_atual == 'turmas.index')
                            <form action="{{route('turma-delete')}}" method="post">
                             @csrf

                            <input type="number" name="id" value="{{$dado->id}}" style="display:none;">
                        @endif
                        @if($rota_atual == 'alunos.index')
                            <form action="{{route('aluno-delete')}}" method="post">
                             @csrf

                            <input type="number" name="id" value="{{$dado->id}}" style="display:none;">
                        @endif
                                    <button type="submit"  class="btn btn-danger">Deletar</button>
                            </form>
                                </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>

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
