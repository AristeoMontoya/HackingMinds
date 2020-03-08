<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class casa extends Model
{
    protected $table = 'casas';

    protected $primaryKey = 'clave_casa';

    public $incrementing = true;

    public $timestamps = true;

    public $fillable = [

        'clave_casa','Nombre_casas','privadas','Numero_de_casa'

    ];
}
