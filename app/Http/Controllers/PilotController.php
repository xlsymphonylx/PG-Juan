<?php

namespace App\Http\Controllers;

use App\Models\Pilot;
use Illuminate\Http\Request;

class PilotController extends Controller // Updated controller class name
{
    public function index()
    {
        $pilots = Pilot::all(); 
        return view('pilot.index', compact('pilots')); 
    }

    public function show($id)
    {
        $pilot = Pilot::findOrFail($id); 
        return view('pilot.show', compact('pilot')); 
    }

    public function create()
    {
        return view('pilot.create'); 
    }

    public function store(Request $request)
    {
        $request->validate([
            'nombre_de_piloto' => 'required', 
            'licencia' => 'required',        
            'codigo_piloto' => 'required',   
            'cabezal' => 'required',         
            'placa' => 'required',           
        ]);

        Pilot::create($request->all()); 

        return redirect()->route('pilot.index') 
            ->with('success', '¡El piloto se ha creado exitosamente!'); 
    }

    public function edit($id)
    {
        $pilot = Pilot::findOrFail($id); 
        return view('pilot.edit', compact('pilot')); 
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nombre_de_piloto' => 'required', 
            'licencia' => 'required',        
            'codigo_piloto' => 'required',   
            'cabezal' => 'required',         
            'placa' => 'required',           
        ]);

        $pilot = Pilot::findOrFail($id); 
        $pilot->update($request->all());  

        return redirect()->route('pilot.index') 
            ->with('success', '¡El piloto se ha actualizado exitosamente!'); 
    }

    public function destroy($id)
    {
        $pilot = Pilot::findOrFail($id); 
        $pilot->delete();                

        return redirect()->route('pilot.index') 
            ->with('success', '¡El piloto se ha eliminado exitosamente!'); 
    }
}
