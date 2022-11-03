<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Http\Resources\V1\SitioResource;
use App\Models\Category;
use App\Models\Sitio;
use Illuminate\Http\Request;

class SitioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // return SitioResource::collection(Sitio::latest()->paginate());
        $sitios = Sitio::all();
        return $sitios;

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

        'nombre_sitio' => 'required|max:255',
        'direccion' => 'required|max:255',
        'municipio' => 'required|max:255',
        'contacto' => 'required|max:255',
        'descripcion' => 'required|max:255',
        'rutas' => 'required|max:255',
        'sitio_web' => 'required|max:255',

      ]);


      $sitio = Sitio::create($request->all());
      
      return $sitio;
    
       
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Sitio  $sitio
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // return new SitioResource($sitio);
         $sitio = Sitio::included()->findOrFail($id);
        return $sitio;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Sitio  $sitio
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Sitio $sitio)
    {
        $request->validate([

            'nombre_sitio' => 'required|max:255',
            'direccion' => 'required|max:255',
            'municipio' => 'required|max:255',
            'contacto' => 'required|max:255',
            'descripcion' => 'required|max:255',
            'rutas' => 'required|max:255',
            'sitio_web' => 'required|max:255',
    
          ]);

          $sitio->update($request->all());
          return $sitio;
    
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Sitio  $sitio
     * @return \Illuminate\Http\Response
     */
    public function destroy(Sitio $sitio)
    {
        if( $sitio->delete() )
            return response()->json(['message' => 'Success'],204);
        
        return response()->json(['message' => 'Not found'],404);
    }
}
