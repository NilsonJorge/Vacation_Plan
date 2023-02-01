<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TradutorController extends Controller
{
   

    public function traduz(){

      $codigo = "4N2";

      $array[0] = substr ($codigo, 0, 1);
      $array[1] = substr ($codigo, 1, 1);
  
      $diadasemana = $array[0];
      $turno = $array[1];
  
      if ($diadasemana == 2){
        echo "Segunda";
      }elseif ($diadasemana == 3){
        echo "Terça";
      }elseif ($diadasemana == 4){
        echo "Quarta";
      }elseif ($diadasemana == 5){
        echo "Quinta";
      }elseif ($diadasemana == 6){
        echo "Sexta";
      }elseif ($diadasemana == 7){
        echo "Sabado";
      }
  
      if ($turno == M){
  
              $array[2] = substr ($codigo, 2, 1);
              $horario = $array[2];
          if($horario == 1){
              echo "07:10 - 08:00";
          }elseif($horario == 2){
              echo "08:00 - 08:50";
          }elseif($horario == 3){
              echo "08:50 - 09:40";
          }elseif($horario == 4){
              echo "10:00 - 10:50";
          }elseif($horario == 5){
              echo "10:50 - 11:40";
          }elseif($horario == 6){
              echo "11:40 - 12:30";
          }
  
      }
  
      if ($turno == T){
          $array[2] = substr ($codigo, 2, 1);
          $horario = $array[2];
        if($horario == 1){
          echo "13:00 - 13:50";
         }elseif($horario == 2){
          echo "13:50 - 14:40";
         }elseif($horario == 3){
          echo "14:40 - 15:30";
         }elseif($horario == 4){
          echo "15:50 - 16:40";
         }elseif($horario == 5){
          echo "16:40 - 17:30";
         }elseif($horario == 6){
          echo "17:30 - 18:20";
        }
      }
  
  
      if ($turno == N){
  
          $array[2] = substr ($codigo, 2, 1);
          $horario = $array[2];
        if($horario == 1){
          echo "18:20 - 19:05";
         }elseif($horario == 2){
          echo "19:15 - 20:00";
         }elseif($horario == 3){
          echo "20:00 - 20:45";
         }elseif($horario == 4){
          echo "21:00 - 21:45";
         }elseif($horario == 5){
          echo "21:45 - 22:30";
        }
      }
 }
}

