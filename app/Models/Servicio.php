<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Servicio extends Model
{
    use HasFactory;

        
protected $fillable= ['nombreServicio', 'valorServicio'];
protected $allowIncluded= ['sitio'];

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

         //Relacion uno a muchos (inversa)


    public function sitio(){
    return $this ->belongsTo(Sitio::class);

  }




    
}
