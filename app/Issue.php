<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Issue extends Model
{
  protected  $fillable = [
    'titulo',
    'editor',
    'detalle',
    'urgencia',
    'impacto',
    'fentrega',
    'proy_id',
   ];
   public function proyecto()
     {
         return $this->belongsTo('App\Proyecto', 'proy_id', 'id');
     }
  public function comentario()
     {
       return $this->hasMany('App\Comentario', 'issue_id', 'id');
     }
}
