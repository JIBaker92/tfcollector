<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Character extends Model
{
    protected $fillable = [
        'title', 'name', 'description', 'class', 'faction'
    ];
}
