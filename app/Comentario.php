<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comentario extends Model
{
  public $timestamps = false;
  protected  $fillable=[
      'comentario',
      'issue_id',
    ];

    public function proyecto()
      {
          return $this->belongsTo('App\Issue', 'issue_id', 'id');
      }
}
