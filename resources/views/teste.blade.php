<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Listar BD teste</title>

        <style>
        body {
            background-color: #297A7D
        }
        </style>

</head>
<body >
    <h1>Listar BD Turmas Sigaa</h1>

    @foreach ($turmas as $turma)
        <p>{{$turma->id_turma_sigaa}}</p>
        <p>{{$turma->Codigo}}</p>
        <p>{{$turma->Turma}}</p>
    @endforeach

</body>
    
</html>
