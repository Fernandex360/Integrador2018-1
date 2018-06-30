<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Denuncia extends Model
{
   protected $table ="denuncias";


   protected $fillable=['tipoIncidente','fecha','descripcion','evidencia','estado','latitud','longitud','id_denunciante','created_at','updated_at'];

  
   public function user (){

    	return $this->belongsTo('App\user');
   }
   public function scopeSearch($query, $filtro){

    return $query->where('tipoIncidente','LIKE',"%$filtro%");
   }
}
