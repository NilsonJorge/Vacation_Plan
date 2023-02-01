<?php

namespace App\Http\Controllers;

use App\Models\Turma;
use App\Models\TurmaSigaa;
use App\Models\sala;
use App\Models\Alocacao;
use Illuminate\Support\Facades\DB;

class TurmasController extends Controller
{
    public function index()
    {

        $turma_s = Turma::orderBy('Prioridade' ,'DESC')->orderBy('Codigo')->orderBy('Turma')->orderBy('Turma')->orderBy('Codigo_horario')->get();
        //Turma::all();
        $salas = [];
        $blocos = [];
        for ($i = 0; $i < count($turma_s); $i++){
            $alocacao = Alocacao::where('Turma_id_turma',$turma_s[$i]->id_turma)->first();
            if(is_null($alocacao)){
                $salas[$i] = '-';
                $blocos[$i] = '-';
            }else{
                $sala = new sala;
                $idsala = $alocacao->Salas_id_salas;
                $sala = sala::where('id_salas',$idsala)->first();
                $salas[$i] = $sala->Numero;
                $blocos[$i] = $sala->Bloco;
            }
        }
        //dd($salas);
        return view('principal')->with('turmas', $turma_s)->with('blocos', $blocos)->with('salas', $salas);
    }

    public function import()
    {
        $turma_sigaas = TurmaSigaa::all();
        $turma;
        $contador_imports = 0;

        for ($i = 0; $i < count($turma_sigaas); $i++){ 
            $turma = new Turma;
            //cria um model com uma das turmas que virão do sigaa 
            $turma->Codigo = $turma_sigaas[$i]->Codigo;
            $turma->Turma = $turma_sigaas[$i]->Turma;
            $turma->Codigo_horario = $turma_sigaas[$i]->Codigo_horario;
            $turma->Prioridade = $turma_sigaas[$i]->Prioridade;

            //bloquear duplicata
            $verificaDuplicata = Turma::where('Codigo',$turma->Codigo)->where('Turma',$turma->Turma)->where('Codigo_horario',$turma->Codigo_horario)->first();
            if(is_null($verificaDuplicata)){
                $turma->save();
                $contador_imports++;
            }

        }
        //echo '<script>alert(Foram importadas  turmas do sigaa)</script>';
        //dd($contador_imports);
        return  redirect()->action([TurmasController::class, 'index'])->with('importadas',$contador_imports);
    }

    public function finalizar()
    {
        $alocacoes = Alocacao::all();
        $turma;
        $contador_imports = 0;

        for ($i = 0; $i < count($alocacoes); $i++){ 
            $turma = new Turma;
            $turma = Turma::where('id_turma',$alocacoes[$i]->Turma_id_turma)->first();

            $sala = new sala;
            $idsala = $alocacoes[$i]->Salas_id_salas;
            $sala = sala::where('id_salas',$idsala)->first();
            $num_sala = $sala->Numero;
            $num_bloco = $sala->Bloco;

            TurmaSigaa::where('Codigo',$turma->Codigo)->where('Turma',$turma->Turma)->where('Codigo_horario',$turma->Codigo_horario)->update(['Bloco' => $num_bloco,'Sala' => $num_sala]);


        }

        return  redirect()->action([TurmasController::class, 'index']);
    }
}