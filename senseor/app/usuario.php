<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class usuario extends Model
{
    protected $table = 'usuarios';

    protected $primaryKey = 'clave_usuario';

    public $incrementing = true;

    public $timestamps = true;

    public $fillable = [
        'clave_usuario','Nombre_usuarios','Casa','telefono','rol_id'
    ];
}
