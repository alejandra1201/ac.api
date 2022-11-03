<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Models\Servicio;
use Illuminate\Http\Request;

class ServicioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    
        return Servicio::all();
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

            'nombreServicio' => 'required|max:255',
            'valorServicio' => 'required|max:255',
        
          ]);
    
    
          $servicio=Servicio::create($request->all());
          
          return $servicio;
        
    }
    

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Servicio  $servicio
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $servicio = Servicio::included()->findOrFail($id);
        return $servicio;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Servicio  $servicio
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Servicio $servicio)
    {
        
        $request->validate([

            'nombreServicio' => 'required|max:255',
            'valorServicio' => 'required|max:255',
        
          ]);
    
    
          $servicio=Servicio::create($request->all());
          
          return $servicio;
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Servicio  $servicio
     * @return \Illuminate\Http\Response
     */
    public function destroy(Servicio $servicio)
    {
        if( $servicio->delete() )
        return response()->json(['message' => 'Success'],204);
    
         return response()->json(['message' => 'Not found'],404);
    }
}
