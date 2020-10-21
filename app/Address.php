<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    protected $fillable = [
        'prefecture',
        'post',
        'city',
        'number',
    ];

    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
