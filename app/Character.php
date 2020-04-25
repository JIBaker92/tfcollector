<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Character extends Model
{
    protected $fillable = [
        'title', 'description', 'name', 'class_name', 'picture_link'
    ];
}
