<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Games extends Model
{
    protected $table = 'games';

    protected $fillable = [
        'id_publisher',
        'name',
        'description',
        'image'
    ];

    public function publisher()
    {
        return $this->belongsTo('App\Publishers', 'id_publisher');
    }
}
