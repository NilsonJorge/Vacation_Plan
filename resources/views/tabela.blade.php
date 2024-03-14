<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Tabela</title> 

        <link rel="stylesheet" href="css/stylesTabela.css">
        <link rel="stylesheet" type="text/css" href="css/p.css" media="screen" />

        <style>
            * {
                box-sizing: border-box;
            }
    
        body {
            font-family: One day;
            margin: 0;
            background-color: #297a7d;
            background-position: center; 
            background-repeat: no-repeat; 
            background-size: cover;
        }
    
        </style>

    </head>

    <body>
        <div class="topo"> 
            <div class="logo">
                <img src="img/logomarca.png" alt="Logomarca" height="100px" width="150px">
            </div>

            <div class="titulo" style="text-align: center; margin-left: 10%;">
                

                    <h1>Sistema de alocação de salas - UFCAT</h1>
                    <h2>Bloco - {{$bloco}} -- Sala - {{$sala}}   </h2>

                </font> <br/> <br/> <br/>
            </div>
        </div>
        
        <div class="bg">
            <br>
                <table  id="table">
                    <tr>
                      <th>Horário</th>
                      <th>Segunda</th>
                      <th>Terça</th>
                      <th>Quarta</th>
                      <th>Quinta</th>
                      <th>Sexta</th>
                      <th>Sábado</th>
                    </tr>
                    <tr>
                      <th>07:10 - 08:00</th>
                      <td>{{$horarios[0]}}</td>
                      <td>{{$horarios[1]}}</td>
                      <td>{{$horarios[2]}}</td>
                      <td>{{$horarios[3]}}</td>
                      <td>{{$horarios[4]}}</td>
                      <td>{{$horarios[5]}}</td>
                    </tr>
                    <tr>
                      <th>08:00 - 08:50</th>
                      <td>{{$horarios[6]}}</td>
                      <td>{{$horarios[7]}}</td>
                      <td>{{$horarios[8]}}</td>
                      <td>{{$horarios[9]}}</td>
                      <td>{{$horarios[10]}}</td>
                      <td>{{$horarios[11]}}</td>
                    </tr>
                    <tr>
                      <th>08:50 - 09:40</th>
                      <td>{{$horarios[12]}}</td>
                      <td>{{$horarios[13]}}</td>
                      <td>{{$horarios[14]}}</td>
                      <td>{{$horarios[15]}}</td>
                      <td>{{$horarios[16]}}</td>
                      <td>{{$horarios[17]}}</td>
                    </tr>
                    <tr>
                      <th>10:00 - 10:50</th>
                      <td>{{$horarios[18]}}</td>
                      <td>{{$horarios[19]}}</td>
                      <td>{{$horarios[20]}}</td>
                      <td>{{$horarios[21]}}</td>
                      <td>{{$horarios[22]}}</td>
                      <td>{{$horarios[23]}}</td>
                    </tr>
                    <tr>
                        <th>10:50 - 11:40</th>
                      <td>{{$horarios[24]}}</td>
                      <td>{{$horarios[25]}}</td>
                      <td>{{$horarios[26]}}</td>
                      <td>{{$horarios[27]}}</td>
                      <td>{{$horarios[28]}}</td>
                      <td>{{$horarios[29]}}</td>
                      </tr>
                      <tr>
                        <th>11:40 - 12:30</th>
                      <td>{{$horarios[30]}}</td>
                      <td>{{$horarios[31]}}</td>
                      <td>{{$horarios[32]}}</td>
                      <td>{{$horarios[33]}}</td>
                      <td>{{$horarios[34]}}</td>
                      <td>{{$horarios[35]}}</td>
                      </tr>
                      <tr>
                        <th>13:00 - 13:50</th>
                      <td>{{$horarios[66]}}</td>
                      <td>{{$horarios[67]}}</td>
                      <td>{{$horarios[68]}}</td>
                      <td>{{$horarios[69]}}</td>
                      <td>{{$horarios[70]}}</td>
                      <td>{{$horarios[71]}}</td>
                      </tr>
                      <tr>
                        <th>13:50 - 14:40</th>
                      <td>{{$horarios[72]}}</td>
                      <td>{{$horarios[73]}}</td>
                      <td>{{$horarios[74]}}</td>
                      <td>{{$horarios[75]}}</td>
                      <td>{{$horarios[76]}}</td>
                      <td>{{$horarios[77]}}</td>
                      </tr>
                      <tr>
                        <th>14:40 - 15:30</th>
                      <td>{{$horarios[78]}}</td>
                      <td>{{$horarios[79]}}</td>
                      <td>{{$horarios[80]}}</td>
                      <td>{{$horarios[81]}}</td>
                      <td>{{$horarios[82]}}</td>
                      <td>{{$horarios[83]}}</td>
                      </tr>
                      <tr>
                        <th>15:50 - 16:40</th>
                      <td>{{$horarios[84]}}</td>
                      <td>{{$horarios[85]}}</td>
                      <td>{{$horarios[86]}}</td>
                      <td>{{$horarios[87]}}</td>
                      <td>{{$horarios[88]}}</td>
                      <td>{{$horarios[89]}}</td>
                      </tr>
                      <tr>
                        <th>16:40 - 17:30</th>
                      <td>{{$horarios[90]}}</td>
                      <td>{{$horarios[91]}}</td>
                      <td>{{$horarios[92]}}</td>
                      <td>{{$horarios[93]}}</td>
                      <td>{{$horarios[94]}}</td>
                      <td>{{$horarios[95]}}</td>
                    </tr>
                    <tr>
                      <th>17:30 - 18:20</th>
                      <td>{{$horarios[96]}}</td>
                      <td>{{$horarios[97]}}</td>
                      <td>{{$horarios[98]}}</td>
                      <td>{{$horarios[99]}}</td>
                      <td>{{$horarios[100]}}</td>
                      <td>{{$horarios[101]}}</td>
                  </tr>
                  <tr>
                    <th>18:20 - 19:05</th>
                    <td>{{$horarios[36]}}</td>
                      <td>{{$horarios[37]}}</td>
                      <td>{{$horarios[38]}}</td>
                      <td>{{$horarios[39]}}</td>
                      <td>{{$horarios[40]}}</td>
                      <td>{{$horarios[41]}}</td>
                </tr>
                <tr>
                  <th>19:15 - 20:00</th>
                  <td>{{$horarios[42]}}</td>
                  <td>{{$horarios[43]}}</td>
                  <td>{{$horarios[44]}}</td>
                  <td>{{$horarios[45]}}</td>
                  <td>{{$horarios[46]}}</td>
                  <td>{{$horarios[47]}}</td>
              </tr>
              <tr>
                <th>20:00 - 20:45</th>
                <td>{{$horarios[48]}}</td>
                <td>{{$horarios[49]}}</td>
                <td>{{$horarios[50]}}</td>
                <td>{{$horarios[51]}}</td>
                <td>{{$horarios[52]}}</td>
                <td>{{$horarios[53]}}</td>
              </tr>
              <tr>
                <th>21:00 - 21:45</th>
                <td>{{$horarios[54]}}</td>
                <td>{{$horarios[55]}}</td>
                <td>{{$horarios[56]}}</td>
                <td>{{$horarios[57]}}</td>
                <td>{{$horarios[58]}}</td>
                <td>{{$horarios[59]}}</td>
           </tr>
              <tr>
                <th>21:45 - 22:30</th>
                <td>{{$horarios[60]}}</td>
                <td>{{$horarios[61]}}</td>
                <td>{{$horarios[62]}}</td>
                <td>{{$horarios[63]}}</td>
                <td>{{$horarios[64]}}</td>
                <td>{{$horarios[65]}}</td>
              </tr>
          </table>

          <div class="bt">
            <button class="bt1" type="button">Voltar</button>
            <button class="bt1" type="button">Adicionar</button>
            <button class="bt1" type="button">Remover</button>
            <button class="bt1" type="button">Finalizar Edição</button>
            </br></br>
          </div>
            <br><br>
        </div>
    </body>
    <script>
            
            var table = document.getElementById("table"),rIndex,cIndex;
            
            // table rows
            for(var i = 1; i < table.rows.length; i++)
            {
                // row cells
                for(var j = 0; j < table.rows[i].cells.length; j++)
                {
                    table.rows[i].cells[j].onclick = function()
                    {
                        rIndex = this.parentElement.rowIndex;
                        cIndex = this.cellIndex+1;
                        console.log("Row : "+rIndex+" , Cell : "+cIndex);
                    };
                }
            }
            
        </script>
</html>
