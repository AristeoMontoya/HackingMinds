<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class permisos extends Model
{
    protected $table = 'permisos';

    protected $primaryKey = 'id';

    public $incrementing = true;

    public $timestamps = true;

    public $fillable = [
        'id','nombre','key','controller','method'
    ];
}

