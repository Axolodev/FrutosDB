<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Proyecto extends Model
{
    protected $table = 'proyecto';
    
    public function profesor_lider(){
        return $this->hasOne(Profesor::class, 'id', 'id_profesor');
    }
    
    public function linea_investigacion(){
        return $this->hasOne(LineaInvestigacion::class, 'id', 'id_linea_investigacion');
    }
}
