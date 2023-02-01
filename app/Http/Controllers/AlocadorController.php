<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Turma;
use App\Models\TurmaSigaa;
use App\Models\sala;
use App\Models\Horario;
use App\Models\Alocacao;
use Illuminate\Support\Facades\DB;

class AlocadorController extends Controller
{
    public function automatica()
    {
        $turmas = Turma::orderBy('Prioridade' ,'DESC')->orderBy('Codigo')->orderBy('Turma')->orderBy('Turma')->orderBy('Codigo_horario')->get();
        $salas = sala:: orderBy('Piso')->get();
        $horarios = Horario::all();
        //dd($turmas);
        //dd($salas);
        //dd($horarios);
        //while
        //dd($salas[0]);
        //dd(count($turmas));
        $contador_alocacoes = 0;
        for ($i = 0; $i < count($turmas); $i++) {
            $idTurma = $turmas[$i]->id_turma;
            $verifica_idTurma = Alocacao::where('Turma_id_turma',$idTurma)->first();//verifica se aquele turma ja foi alocada
            if(is_null($verifica_idTurma)){// se não foi aloca
                for ($j = 0; $j < count($salas); $j++) {//procura uma sala com vaga naquele horario requerido
                    $dia = intval(substr($turmas[$i]->Codigo_horario,0,1));
                    $turno = substr($turmas[$i]->Codigo_horario,1,1);
                    $hora = intval(substr($turmas[$i]->Codigo_horario,2,1));
                    
                    $horario = Horario::where('Dia',$dia)->where('Turno',$turno)->where('Horario',$hora)->first();
                    $idHorario = $horario->id_horario;

                    $idSala = $salas[$j]->id_salas;

                    $alocacao = Alocacao::where('Salas_id_salas',$idSala)->where('Horario_id_horario',$idHorario)->first();
                    //verifica se a alguma turma alocada naquela sala no horario desejado
                    if(is_null($alocacao)){
                        $alocar_sala = new Alocacao;
                        $alocar_sala->Turma_id_turma = $idTurma;
                        $alocar_sala->Salas_id_salas = $idSala;
                        $alocar_sala->Horario_id_horario = $idHorario;
                        $alocar_sala->save();
                        $contador_alocacoes++;
                        break;
                    }

                }
            }
        }
       // $teste = Alocacao::all();
        //dd($teste);

        return  redirect()->action([TurmasController::class, 'index'])->with('msg',$contador_alocacoes);
    }

    public function delete()
    {
        $deletes_turmas = 0;
        $deletes_alocacoes = 0;
        $turmas = Turma::all();
        $alocacoes = Alocacao::all();
        for ($i = 0; $i < count($alocacoes); $i++){ 
            $alocacoes[$i]->delete();
            $deletes_alocacoes++;
        }

        for ($i = 0; $i < count($turmas); $i++){ 
            $turmas[$i]->delete();
            $deletes_turmas++;
        }

        return  redirect()->action([TurmasController::class, 'index'])->with('apagadas_turmas',$deletes_turmas)->with('apagadas_alocacoes',$deletes_alocacoes);
    }
}
