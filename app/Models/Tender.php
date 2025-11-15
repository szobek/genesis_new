<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Tender extends Model
{
    protected $fillable = [
        'name',
        'email',
        'phone',
        'address',
        'hasGround',
        'ideaType',
        'area',
        'hasBlueprint',
        'hasFoundation'
    ];
}
