<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Distrito extends Model
{
    protected $table="distritos";
    
    protected $fillable=['distrito','created_at','updated_at'];

}
