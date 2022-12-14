<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Models\Promocion;
use Illuminate\Http\Request;

class PromocionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $promocions = Promocion::all();
        return $promocions;
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

            'tipo_promocion' => 'required|max:255',
            'descripcionpromocion' => 'required|max:255',
            'descuento' => 'required|max:255',
            'fechai' => 'required|max:255',
            'fechaf' => 'required|max:255',
            'image_promocion' => 'required|image|max:1024'
       
          ]);
    
    
          $promocion = Promocion::create($request->all());
          
          return $promocion;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Promocion  $promocion
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $promocion = Promocion::included()->findOrFail($id);
        return $promocion;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Promocion  $promocion
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Promocion $promocion)
    {
        $request->validate([

            'tipo_promocion' => 'required|max:255',
            'descripcionpromocion' => 'required|max:255',
            'descuento' => 'required|max:255',
            'fechai' => 'required|max:255',
            'fechaf' => 'required|max:255',
            'image_promocion' => 'required|image|max:1024'
       
          ]);
    
    
          $promocion = Promocion::create($request->all());
          
          return $promocion;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Promocion  $promocion
     * @return \Illuminate\Http\Response
     */
    public function destroy(Promocion $promocion)
    {
        if( $promocion->delete() )
            return response()->json(['message' => 'Success'],204);
        
        return response()->json(['message' => 'Not found'],404);
    }
}
