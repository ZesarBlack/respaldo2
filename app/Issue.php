<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Issue extends Model
{
  protected  $fillable = [
    'titulo',
    'editor',
    'fentrega',
    'proy_id',
   ];
}
