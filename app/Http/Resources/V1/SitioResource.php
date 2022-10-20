<?php

namespace App\Http\Resources\V1;

use Illuminate\Http\Resources\Json\JsonResource;

class SitioResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return parent::toArray($request);
        [
        'nombre_sitio' => $this->nombre_sitio,
        'direccion' => $this->direccion,
        'municipio' => $this->municipio,
        'contacto' => $this->contacto,
        'precio_sitio' => $this->precio_sitio,
        'sitio_web' => $this->sitio_webo,
        ];
    }
}
