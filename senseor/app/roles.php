<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class roles extends Model
{
    protected $table = 'roles';

    protected $primaryKey = 'id';

    public $incrementing = true;

    public $timestamps = true;

    public $fillable = [
        'id','nombre', 'descripcion'
    ];
}
