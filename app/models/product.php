<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class product extends Model
{
    protected $table = 'product';

    public function category()
    {
        return $this->belongsTo('App\models\Category', 'category_id', 'id');
    }
}
