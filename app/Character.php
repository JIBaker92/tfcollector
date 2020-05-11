<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Character extends Model
{
    protected $fillable = [
        'title', 'description', 'classification_name', 'faction_name'
    ];
}
