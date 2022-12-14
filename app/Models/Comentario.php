<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comentario extends Model
{
    use HasFactory;

   
    
    protected $fillable= ['name', 'tipo_comentario','mensaje'];
    protected $allowIncluded= ['sitio','user'];


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
    public function user(){
    return $this ->belongsTo(User::class);
  
    }
  
    public function sitio(){
    return $this ->belongsTo(Sitio::class);
  
    }
}
