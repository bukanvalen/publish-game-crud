<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Publishers extends Model
{
    protected $table = 'publishers';

    protected $fillable = [
        'name',
        'description',
    ];
}
