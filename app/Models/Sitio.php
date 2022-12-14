<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Query\Builder as QueryBuilder;

class Sitio extends Model
{
    use HasFactory;


    protected $fillable= ['nombre_sitio', 'direccion', 'municipio', 'contacto',  'descripcion','rutas','sitio_web','image_sitio'];
    protected $allowIncluded= ['users','comentario','reserva','Category'];

    public function scopeIncluded(Builder $query){
       
        if(empty($this->allowIncluded)||empty(request('included'))){
            return;
        }
        $relations = explode(',', request('included'));//['post','relation2']
        
        $allowIncluded=collect($this->allowIncluded);//colocamos en una colecion lo que tiene $allowIncluded en este caso = ['posts','posts.user']
        
        foreach($relations as $key => $relationship){//recorremos el array de relaciones
            
            if(!$allowIncluded->contains($relationship)){
                unset($relations[$key]);
            }
        
        }

        $query->with($relations);
     
    }

    public function comentario (){
        return $this->hasMany(Comentario::class);
    }
    public function servicio (){
        return $this->hasMany(Servicio::class);
    }
    
    public function reserva (){
        return $this->hasMany(Reserva::class);
    }
   //relacion uno a muchos polimorfica

     //relacion uno a muchos
    public function users(){
    return $this->belongsToMany(User::class);
    
    }
    public function  category(){
        return $this ->belongsTo(Category::class);
    
      }
}

