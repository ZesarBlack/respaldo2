<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Proyecto extends Model
{
    protected $fillable=[
      'nombre',
      'fentrega',
    ];

    public function issue()
  {
    return $this->hasMany('App\Issue', 'proy_id', 'id');
  }
}
