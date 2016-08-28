<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class LineaInvestigacion extends Model
{
    protected $table = 'linea_investigacion';
    
    public function grupo_investigacion(){
        return $this->hasOne(GrupoInvestigacion::class, 'id', 'id_grupo_investigacion');
    }
}
