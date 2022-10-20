<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Servicio extends Model
{
    use HasFactory;

        
protected $fillable= ['nombreServicio', 'valorServicio'];
protected $guarded= ['idsitio'];




         //Relacion uno a muchos (inversa)


  public function sitio(){
    return $this ->belongsTo(Sitio::class);

  }




    
}
