<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Tabela</title> 
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/stylesSalas.css">
    <link rel="stylesheet" href="js/jsTabela.js">
    <style>
      body {
        background-color: #297A7D
      }
    </style>
  </head>
  <body class="antialiased">

    <div classe="topo"> 
      <div class="logo">
        <img src="img/logomarca.png" alt="Logomarca" height="100PX" width="150PX">
      </div>      
      <div class="titulo" style="text-align: center;">
        <font size="3">
          <h1>Sistema de alocação de salas - UFCAT</h1>
          <h1>Sala - xx</h1>
        </font> <br/> <br/> <br/>
      </div>
    </div>

    <div class="container">
      <div class="jumboton">
        <div class="card">
          <div class="card-body">
            <h5 class="card-title">
              <div class="dropdown">
                <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">filtro
                <span class="caret"></span></button>
                <ul class="dropdown-menu">
                  <input class="form-control" id="myInput" type="text" placeholder="Search..">
                  <li><a></a></li>
                  <li><a></a></li>
                  <li><a></a></li>
                  <li><a></a></li>
                  <li><a></a></li>
                  <li><a></a></li>
                </ul>
              </div>
            </h5>
            <div class="container">
              <div class="row">
                <div class="col-12">
                  <table class="table table-bordered" style="overflow-y: hidden">
                    <thead>
                      <tr>
                        <th scope="col">Bloco</th>
                        <th scope="col">Andar</th>
                        <th scope="col">Sala</th>
                        <th scope="col">Estado</th>
                        <th scope="col">Actions</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <th scope="row">1</th>
                        <td>2º</td>
                        <td>206</td>
                        <td>livre</td>
                        <td>
                          <button type="button" class="btn btn-primary"><a>s</a></button>
                          <button type="button" class="btn btn-success"><a>s</a></button>
                          <button type="button" class="btn btn-danger"><a>s</a></i></button>
                        </td>
                      </tr>
                      <tr>
                        <th scope="row">1</th>
                        <td>2º</td>
                        <td>206</td>
                        <td>livre</td>
                        <td>
                          <button type="button" class="btn btn-primary"><a>s</a></button>
                          <button type="button" class="btn btn-success"><a>s</a></button>
                          <button type="button" class="btn btn-danger"><a>s</a></i></button>
                        </td>
                      </tr>
                      <tr>
                        <th scope="row">1</th>
                        <td>2º</td>
                        <td>206</td>
                        <td>livre</td>
                        <td>
                          <button type="button" class="btn btn-primary"><a>s</a></button>
                          <button type="button" class="btn btn-success"><a>s</a></button>
                          <button type="button" class="btn btn-danger"><a>s</a></i></button>
                        </td>
                      </tr>
                      <tr>
                        <th scope="row">1</th>
                        <td>2º</td>
                        <td>206</td>
                        <td>livre</td>
                        <td>
                          <button type="button" class="btn btn-primary"><a>s</a></button>
                          <button type="button" class="btn btn-success"><a>s</a></button>
                          <button type="button" class="btn btn-danger"><a>s</a></i></button>
                        </td>
                      </tr>
                      <tr>
                        <th scope="row">1</th>
                        <td>2º</td>
                        <td>206</td>
                        <td>livre</td>
                        <td>
                          <button type="button" class="btn btn-primary"><a>s</a></button>
                          <button type="button" class="btn btn-success"><a>s</a></button>
                          <button type="button" class="btn btn-danger"><a>s</a></i></button>
                        </td>
                      </tr>
                      <tr>
                        <th scope="row">1</th>
                        <td>2º</td>
                        <td>206</td>
                        <td>livre</td>
                        <td>
                          <button type="button" class="btn btn-primary"><a>s</a></button>
                          <button type="button" class="btn btn-success"><a>s</a></button>
                          <button type="button" class="btn btn-danger"><a>s</a></i></button>
                        </td>
                      </tr>
                      <tr>
                        <th scope="row">1</th>
                        <td>2º</td>
                        <td>206</td>
                        <td>livre</td>
                        <td>
                          <button type="button" class="btn btn-primary"><a>s</a></button>
                          <button type="button" class="btn btn-success"><a>s</a></button>
                          <button type="button" class="btn btn-danger"><a>s</a></i></button>
                        </td>
                      </tr>
                      <tr>
                        <th scope="row">1</th>
                        <td>2º</td>
                        <td>206</td>
                        <td>livre</td>
                        <td>
                          <button type="button" class="btn btn-primary"><a>s</a></button>
                          <button type="button" class="btn btn-success"><a>s</a></button>
                          <button type="button" class="btn btn-danger"><a>s</a></i></button>
                        </td>
                      </tr>
                      <tr>
                        <th scope="row">1</th>
                        <td>2º</td>
                        <td>206</td>
                        <td>livre</td>
                        <td>
                          <button type="button" class="btn btn-primary"><a>s</a></button>
                          <button type="button" class="btn btn-success"><a>s</a></button>
                          <button type="button" class="btn btn-danger"><a>s</a></i></button>
                        </td>
                      </tr>
                      <tr>
                        <th scope="row">1</th>
                        <td>2º</td>
                        <td>206</td>
                        <td>livre</td>
                        <td>
                          <button type="button" class="btn btn-primary"><a>s</a></button>
                          <button type="button" class="btn btn-success"><a>s</a></button>
                          <button type="button" class="btn btn-danger"><a>s</a></i></button>
                        </td>
                      </tr>
                      <tr>
                        <th scope="row">1</th>
                        <td>2º</td>
                        <td>206</td>
                        <td>livre</td>
                        <td>
                          <button type="button" class="btn btn-primary"><a>s</a></button>
                          <button type="button" class="btn btn-success"><a>s</a></button>
                          <button type="button" class="btn btn-danger"><a>s</a></i></button>
                        </td>
                      </tr>
                      <tr>
                        <th scope="row">1</th>
                        <td>2º</td>
                        <td>206</td>
                        <td>livre</td>
                        <td>
                          <button type="button" class="btn btn-primary"><a>s</a></button>
                          <button type="button" class="btn btn-success"><a>s</a></button>
                          <button type="button" class="btn btn-danger"><a>s</a></i></button>
                        </td>
                      </tr>
                      <tr>
                        <th scope="row">1</th>
                        <td>2º</td>
                        <td>206</td>
                        <td>livre</td>
                        <td>
                          <button type="button" class="btn btn-primary"><a>s</a></button>
                          <button type="button" class="btn btn-success"><a>s</a></button>
                          <button type="button" class="btn btn-danger"><a>s</a></i></button>
                        </td>
                      </tr>
                      <tr>
                        <th scope="row">1</th>
                        <td>2º</td>
                        <td>206</td>
                        <td>livre</td>
                        <td>
                          <button type="button" class="btn btn-primary"><a>s</a></button>
                          <button type="button" class="btn btn-success"><a>s</a></button>
                          <button type="button" class="btn btn-danger"><a>s</a></i></button>
                        </td>
                      </tr>
                      <tr>
                        <th scope="row">1</th>
                        <td>2º</td>
                        <td>206</td>
                        <td>livre</td>
                        <td>
                          <button type="button" class="btn btn-primary"><a>s</a></button>
                          <button type="button" class="btn btn-success"><a>s</a></button>
                          <button type="button" class="btn btn-danger"><a>s</a></i></button>
                        </td>
                      </tr>
                      <tr>
                        <th scope="row">1</th>
                        <td>2º</td>
                        <td>206</td>
                        <td>livre</td>
                        <td>
                          <button type="button" class="btn btn-primary"><a>s</a></button>
                          <button type="button" class="btn btn-success"><a>s</a></button>
                          <button type="button" class="btn btn-danger"><a>s</a></i></button>
                        </td>
                      </tr>
                      <tr>
                        <th scope="row">1</th>
                        <td>2º</td>
                        <td>206</td>
                        <td>livre</td>
                        <td>
                          <button type="button" class="btn btn-primary"><a>s</a></button>
                          <button type="button" class="btn btn-success"><a>s</a></button>
                          <button type="button" class="btn btn-danger"><a>s</a></i></button>
                        </td>
                      </tr>
                      <tr>
                        <th scope="row">1</th>
                        <td>2º</td>
                        <td>206</td>
                        <td>livre</td>
                        <td>
                          <button type="button" class="btn btn-primary"><a>s</a></button>
                          <button type="button" class="btn btn-success"><a>s</a></button>
                          <button type="button" class="btn btn-danger"><a>s</a></i></button>
                        </td>
                      </tr>
                      <tr>
                        <th scope="row">1</th>
                        <td>2º</td>
                        <td>206</td>
                        <td>livre</td>
                        <td>
                          <button type="button" class="btn btn-primary"><a>s</a></button>
                          <button type="button" class="btn btn-success"><a>s</a></button>
                          <button type="button" class="btn btn-danger"><a>s</a></i></button>
                        </td>
                      </tr>
                      <tr>
                        <th scope="row">1</th>
                        <td>2º</td>
                        <td>206</td>
                        <td>livre</td>
                        <td>
                          <button type="button" class="btn btn-primary"><a>s</a></button>
                          <button type="button" class="btn btn-success"><a>s</a></button>
                          <button type="button" class="btn btn-danger"><a>s</a></i></button>
                        </td>
                      </tr>
                      
                      
                      
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
            <a a href="#" class="btn btn-primary">Go somewhere</a>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>
