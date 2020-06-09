<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class StandardCatalog extends Model
{
    protected $fillable = [
        'name',
        'image',
        'category',
    ];

    protected $with = [
        'products',
    ];

    public function products()
    {
        return $this->hasMany('App\Product','parent');
    }
}
