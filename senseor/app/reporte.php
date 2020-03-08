<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class reporte extends Model
{
    protected $table = 'reporte';

    protected $primaryKey = 'id';

    public $incrementing = true;

    public $timestamps = true;

    public $fillable = [
        'id','fecha','contenido','tipo','usuario_id'
    ];
}
