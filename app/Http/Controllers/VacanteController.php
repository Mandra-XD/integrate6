<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Vacante;
use App\Models\User;
class VacanteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $vacante = Vacante::all();
      

        return view('vacantes.index', ['vacante' => $vacante, ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
          $vacante = new Vacante();
          $user = User::all();
          return view('vacantes.create', compact('vacante', 'user'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $vacante = new Vacante();
        $vacante->puesto = $request->get('puesto');
        $vacante->lugar = $request->get('lugar');
        $vacante->salario = $request->get('salario');
        $vacante->tipo_empleo = $request->get('tipo_empleo');
        $vacante->turno = $request->get('turno');
        $vacante->descripcion = $request->get('descripcion');
        $vacante->experiencia = $request->get('experiencia');
        $vacante->user_id = auth()->id();
        $vacante->save();

        return redirect()->route('vacante.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
         $vacante = Vacante::find($id);
        return view('vacantes.edit', compact('vacante'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Vacante $vacante)
    {
         $vacante->update([
            'puesto' => request('puesto'),
            'lugar' => request('lugar'),
            'salario' => request('salario'),
            'tipo_empleo' => request('tipo_empleo'),
            'turno' => request('turno'),
            'descripcion' => request('descripcion'),
            'experiencia' => request('experiencia'),
        ]);

        return redirect()->route('vacante.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}