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
 
     
     public function store(Request $request)
     {
         $request->validate([
             'title' => ['required','string','max:255'],
             'description' => ['required','string','max:500'],
             'date' => ['required','date'],
             'location'=> ['required','string'],
             'participants'=>['nullable','string'],
         ]);
         $holiday = Holiday::create($request->all());

         if ($holiday) {
            return response()->json(['message' => 'Holiday created successfully'], 201);
        } else {
            return response()->json(['error' => 'Failed to create holiday'], 500);
        }
     }
 
    
     public function show(string $id)
     {
         return Holiday::findOrFail($id);
     }
     public function createPDF(Request $request, string $id)
     {
         //Data colection
         $holiday = Holiday::findOrFail($id);
         
         $pdf = new TCPDF();
     
         $pdf->SetTitle('Holiday Details');
     
         $pdf->AddPage();
     
         // Construction of PDF
         $content = '<h1>Holiday Details</h1>';
         $content .= '<p>Title: ' . $holiday->title . '</p>';
         $content .= '<p>Description: ' . $holiday->description . '</p>';
         $content .= '<p>Date: ' . $holiday->date . '</p>';
         $content .= '<p>Location: ' . $holiday->location . '</p>';
         $content .= '<p>Participants: ' . $holiday->participants . '</p>';
     
         $pdf->writeHTML($content);
     
         return Response::make($pdf->Output(), 200, [
             'Content-Type' => 'application/pdf',
             'Content-Disposition' => 'inline; filename="holiday_details.pdf"',
         ]);
     }
 
     public function update(Request $request, string $id)
     {
         $holiday =  Holiday::findOrFail($id);
         $holiday->update($request->all());

         if ($holiday) {
            return response()->json(['message' => 'Holiday Plan updated successfully'], 201);
        } else {
            return response()->json(['error' => 'Failed to update holiday plan'], 500);
        }
     }
 
     public function destroy(string $id)
     {
         $holiday =  Holiday::findOrFail($id);
         $holiday->delete();
         return response()->json(['message' => 'Holiday plan successfully deleted'], 200);
     }
}
