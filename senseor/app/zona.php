<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class zona extends Model
{
    protected $table = 'zonas';

    protected $primaryKey = 'clave_zona';

    public $incrementing = true;

    public $timestamps = true;

    public $fillable = [
        'clave_zona','nombre_zonas','privadas','limite_de_invitados'
    ];
}
