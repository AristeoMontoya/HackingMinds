<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class privada extends Model
{
    protected $table = 'privadas';

    protected $primaryKey = 'clave_privada';

    public $incrementing = true;

    public $timestamps = true;

    public $fillable = [
        'clave_privada','nombre_privada','dirección','telefono'
    ];
}
