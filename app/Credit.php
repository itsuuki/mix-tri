<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Credit extends Model
{
    protected $fillable = [
        'name',
        'company',
        'number',
        'security',
    ];

    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
