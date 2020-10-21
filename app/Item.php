<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    protected $fillable = [
        'name',
        'price',
        'description',
    ];

    public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function category()
    {
        return $this->belongsTo('App\Category');
    }

    public function images()
    {
        return $this->hasMany('App\Image');
    }

    public function addresses()
    {
        return $this->hasMany('App\Address');
    }

    public function favorites()
    {
        return $this->hasMany('App\Favorite');
    }

    public function users()
    {
        return $this->belongsToMany('App\User', 'favorites', 'item_id', 'user_id')->withTimestamps();
    }
}
