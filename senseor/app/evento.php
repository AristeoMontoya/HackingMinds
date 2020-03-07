<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class evento extends Model
{
    protected $table = 'eventos';

    protected $primaryKey = 'clave_evento';

    public $incrementing = true;

    public $timestamps = true;

    public $fillable = [
        'clave_evento','nombre_evento','Zona','numero_invitados', 'Fecha_evento'
    ];
}
