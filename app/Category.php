<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Kalnoy\Nestedset\NodeTrait;

class Category extends Model
{
    use NodeTrait;
    protected $table = 'categorys';

    protected $fillable = [
        'genre',
        'subgenre',
        'detail',
    ];
    protected $guarded = [
        'id',
        'created_at',
        'updated_at',
        'depth',
      ];

    public function items()
    {
        return $this->hasMany('App\Item');
    }
}
