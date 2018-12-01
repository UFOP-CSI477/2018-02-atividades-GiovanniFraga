<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Registros extends Model
{
  protected $fillable = ['descricao','datalimite','tipo'];
  protected $guarded = ['id','equipamento_id', 'created_at', 'update_at'];
  protected $table = 'registros';
}
