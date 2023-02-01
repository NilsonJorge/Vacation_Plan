<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Login</title>

        <link rel="stylesheet" href="/css/styles.css">

        <style>
        body {
            background-color: #297A7D
        }
        </style>

    </head>

    <body class="antialiased">
        <div classe="topo"> 
            <div class="logo">
                <img src="/img/logomarca.png" alt="Logomarca" height="150" width="200">
            </div> 
            <div class="titulo" style="text-align: center;">
                <font size="6">
                    <h1> Sistema de alocação de salas - UFCAT</h1>
                </font> <br/> <br/> <br/>
            </div>
        </div>
        <section class="form-container">
            <div class="container">
               
                <form method="post" action=" {{route('auth.user')}}">
                    @csrf
                    <h2>Login</h2>
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    @if(session('danger'))
                        <div class="alert alert-danger">
                            {{session('danger')}}
                        </div>
                    @endif
                    <div class="input-single">
                        <label for= "email-box">Usuário:</label>
                        <input type="name" name="name" id="email-box" class="input">
                    </div>
                    <div class="input-single">
                        <label for= "senha-box">Senha:</label>
                        <input type="password" name="password" id="senha-box" class="input">
                    </div>
                    <div class="btn">
                        <input type="submit" value="Entrar">
                    </div>
                </form>
            </div>
        </section>
    </body>
</html>
