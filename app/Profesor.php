<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profesor extends Model
{
    protected $table = 'profesor';
    
    public function grupo_investigacion(){
        return $this->hasOne(GrupoInvestigacion::class, 'id', 'id_grupo_investigacion');
    }
}