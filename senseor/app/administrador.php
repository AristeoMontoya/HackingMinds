<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class administrador extends Model
{
    protected $table = 'administrador';

    protected $primaryKey = 'clave_admin';

    public $incrementing = true;

    public $timestamps = true;

    public $fillable = [
        'clave_admin','Privada','nombre'
    ];
}
