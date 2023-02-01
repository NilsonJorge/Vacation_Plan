<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alocação de Salas</title>
    <link rel="stylesheet" type="text/css" href="/css/principal.css" media="screen" />
    <style>
        * {
            box-sizing: border-box;
        }

    .header {
        overflow: hidden;
        background-color: #29797C;
        border-radius: 10px;
        padding: 20px 10px;
        margin: 10px;
    }

    .header a {
        float: left;
        color: #E1DEE3;
        text-align: center;
        padding: 12px;
        text-decoration: none;
        font-size: 18px; 
        line-height: 25px;
        border-radius: 4px;
    }

    .header h1 {
        font-size: 20px;
    }

    .header a.logo {
        font-size: 25px;
        font-weight: bold;
    }

    .header a.hdc {
        font-size: 30px;
        text-align: center;
        margin-left: 25%;
        font-weight: bold;
    }

    .header a.active {
        background-color: dodgerblue;
        color: white;
    }

    .hd-right {
        float: right;
    }

    @media screen and (max-width: 500px) {
        .header a {
            float: none;
            display: block;
            text-align: left;
        }
    }

    body {
        font-family: One day;
        margin: 0;
        background-color: #297A7D;
        background-position: center; 
        background-repeat: no-repeat; 
        background-size: cover;
    }

    </style>
</head>

    <div class="header">
        <a class="logo">UFCAT</a>
        <a class="hdc">Sistema de Alocação de Salas</a>
        <div class="hd-right">
                <a class="active" href="{{ route('login.logout')}}">Inicio</a>
                <a href="#contact">Contato</a>
        </div>
    </div>
      
   <div class="bg1"></br></br></div>

    <div class="bg">
        <div class="botao-importar">
            <form action="/importar-turmas" method="POST"> 
                @csrf
                <button class="bt1" type="submit">Importar Turmas</button>
            </form>
        </div>

        <div class="botao-alocacao">
            <form action="/alocar-salas" method="POST"> 
                @csrf
                <button class="bt1" type="submit">Iniciar Alocação</button>
            </form>
        </div>
    

        <div class="botao-manual">
            <form action="/alocar-salas" method="POST"> 
                @csrf
                <button class="bt1" type="button">Visualizar Alocação</button>
            </form>
        </div>

        <div class="botao-finalizar">
            <form action="/finalizar-alocacao" method="POST"> 
                @csrf
                <button class="bta" type="submit" onclick="alert('Dados foram enviados com sucesso')">Finalizar Alocação</button>
            </form>
        </div>
        </br></br>
        <main>
            <div class="row">
                @if(session('msg'))
                    <p class='msg'>Foram atribuidas salas à {{session('msg')}} turmas!</p>
                @endif
                @if(session('importadas'))
                    <p class='msg'>Foram importadas {{session('importadas')}} turmas do Sigaa!</p>
                @endif

                @if(session('apagadas_turmas') or session('apagadas_alocacoes'))
                    <p class='msg'>Foram apagadas {{session('apagadas_turmas')}} turmas e {{session('apagadas_alocacoes')}} alocações do sistema!</p>
                @endif

                @yield('content')
            </div>
        </main>
        <div style="overflow: auto; width: 99%; height: 500px;">
            <table>
                <tr>
                  <th>Codigo</th>
                  <th>Turma</th>
                  <th>Horario</th>
                  <th>Prioridade</th>
                  <th>Bloco</th>
                  <th>Sala</th>
                </tr>

                @for ($i = 0; $i < count($turmas); $i++) 
                    <tr>
                        <td>{{$turmas[$i]->Codigo}}</td>
                        <td>{{$turmas[$i]->Turma}}</td>
                        <td>{{$turmas[$i]->Codigo_horario}}</td>
                        <td>{{$turmas[$i]->Prioridade}}</td>
                        <td>{{$blocos[$i]}}</td>
                        <td>{{$salas[$i]}}</td>
                        
                    </tr>
                @endfor
              </table>
        </div>
        <div class="botao-deletar">
            <form action="/deleta" method="POST"> 
                @csrf
                <button class="bt1" type="submit" >Apagar Tudo</button>
            </form>
        </div>
        <br><br>
    </div>
</body>
</html>