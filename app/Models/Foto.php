<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Foto extends Model
{
    protected $table='foto';
    protected $fillable=['id','url','id_evento','id_negocio'];
   
}