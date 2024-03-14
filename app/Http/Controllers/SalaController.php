<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Turma;
use App\Models\TurmaSigaa;
use App\Models\sala;
use App\Models\Horario;
use App\Models\Alocacao;

class SalaController extends Controller
{
    public function index()
    {
        $sala = 103;
        $bloco = 2;
        $horarios_tabela = [];

        $horarios = Horario::orderBy('Turno')->orderBy('Horario')->get();
        $salaid = sala::where('Numero',$sala)->where('Bloco',$bloco)->first();

        for ($i = 0; $i < count($horarios); $i++){
            $alocacao = Alocacao::where('Horario_id_horario',$horarios[$i]->id_horario)->where('Salas_id_salas',$salaid->id_salas)->first();
            if(is_null($alocacao)){
                $horarios_tabela[$i] = '';
            }else{
                $turma = Turma::where('id_turma',$alocacao->Turma_id_turma)->first();
                $horarios_tabela[$i] = $turma->Codigo.'-'.$turma->Turma ;
            }
           
        }



        //dd($horarios[36]);
        return view('tabela')->with('horarios', $horarios_tabela)->with('bloco', $bloco)->with('sala', $sala);
    }
}
