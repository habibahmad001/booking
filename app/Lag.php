<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Lag extends Model
{
    public $timestamps = false;
    protected $table = 'tablelag';

    protected $fillable = [
        'id', 'name', 'area', 'legs', 'apply_type', 'register_type', 'status'
    ];
}
