<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Collection extends Model
{
    protected $fillable = [
        'title', 'name', 'condition', 'class', 'price', 'bought_year', 'userID'
    ];
}
