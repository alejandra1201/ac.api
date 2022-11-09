<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Models\Reserva;
use Illuminate\Http\Request;

class ReservaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $reservas=Reserva::all();
        // return $reservas;
        return Reserva::all();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([

            'estado' => 'required|max:255',
            'correo' => 'required|max:255',
            'fechaReserva' => 'required|max:255',
            'contacto' => 'required|max:255',
            'descripcionReserva' => 'required|max:255',
    
          ]);
    
    
          $reserva=Reserva::create($request->all());
          
          return $reserva;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Reserva  $reserva
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $reserva = Reserva::included()->findOrFail($id);
        return $reserva;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Reserva  $reserva
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Reserva $reserva)
    {
        $request->validate([

            'estado' => 'required|max:255',
            'correo' => 'required|max:255',
            'fechaReserva' => 'required|max:255',
            'contacto' => 'required|max:255',
            'descripcionReserva' => 'required|max:255',
    
          ]);
    
    
          $reserva=Reserva::create($request->all());
          
          return $reserva;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Reserva  $reserva
     * @return \Illuminate\Http\Response
     */
    public function destroy(Reserva $reserva)
    {
        if( $reserva->delete() )
        return response()->json(['message' => 'Success'],204);
    
        return response()->json(['message' => 'Not found'],404);
    }
}
