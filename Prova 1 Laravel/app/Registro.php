<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Registro extends Model
{
    public $table = 'registros';
    
    public function atletas(){
        return $this->belongsTo('App\User', 'atleta_id');
    }

    public function eventos(){
        return $this->belongsTo('App\Evento', 'evento_id');
    }
}
