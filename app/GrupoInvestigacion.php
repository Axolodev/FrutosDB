<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class GrupoInvestigacion extends Model
{
    protected $table = 'grupo_investigacion';
    
    public function area_estrategica(){
        return $this->hasOne(AreaEstrategica::class, 'id', 'id_area_estrategica');
    }
    public function escuela(){
        return $this->hasOne(Escuela::class, 'id', 'id_escuela');
    }
}