<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Models\Holiday;
use TCPDF;
class HolidayController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    
     public function index()
     {
         return Holiday::all();
     }
 
 
     public function create()
     {
         //
     }
 
  
     public function store(Request $request)
     {
         $request->validate([
             'title' => ['required','string','max:255'],
             'description' => ['required','string','max:500'],
             'date' => ['required','date'],
             'location'=> ['required','string'],
             'participants'=>['nullable','string'],
         ]);
         Holiday::create($request->all());
     }
 
    
     public function show(string $id)
     {
         return Holiday::findOrFail($id);
     }
     public function createPDF(Request $request, string $id)
     {
         // Obtenha os dados do feriado
         $holiday = Holiday::findOrFail($id);
     
         // Crie uma nova instância do TCPDF
         $pdf = new TCPDF();
     
         // Defina o título do documento
         $pdf->SetTitle('Holiday Details');
     
         // Adicione uma nova página ao PDF
         $pdf->AddPage();
     
         // Crie o conteúdo do PDF
         $content = '<h1>Holiday Details</h1>';
         $content .= '<p>Title: ' . $holiday->title . '</p>';
         $content .= '<p>Description: ' . $holiday->description . '</p>';
         $content .= '<p>Date: ' . $holiday->date . '</p>';
         $content .= '<p>Location: ' . $holiday->location . '</p>';
         $content .= '<p>Participants: ' . $holiday->participants . '</p>';
     
         // Adicione o conteúdo ao PDF
         $pdf->writeHTML($content);
     
         // Saída do PDF como uma resposta HTTP
         return Response::make($pdf->Output(), 200, [
             'Content-Type' => 'application/pdf',
             'Content-Disposition' => 'inline; filename="holiday_details.pdf"',
         ]);
     }
 
     public function update(Request $request, string $id)
     {
         $holiday =  Holiday::findOrFail($id);
         $holiday->update($request->all());
     }
 
     /**
      * Remove the specified resource from storage.
      */
     public function destroy(string $id)
     {
         $holiday =  Holiday::findOrFail($id);
         $holiday->delete();
     }
}
