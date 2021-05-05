<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ledare extends Model
{
    public $timestamps = false;
    protected $table = 'tableledare';

    protected $fillable = [
        'id', 'name', 'Kont_type', 'lagb_type', 'tillg_type', 'register_type', 'status'
    ];
}
