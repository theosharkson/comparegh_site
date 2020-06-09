<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'merchantid',
        'parent',
        'name',
        'image',
        'url',
        'price',
    ];

    public function merchant()
    {
        return $this->belongsTo('App\Merchant','merchantid');
    }
}
