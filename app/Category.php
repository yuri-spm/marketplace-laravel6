<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    // N para N -> N produtos para N categorias
    public function products()
    {
        return $this->belongsToMany(Product::class);
    }
}
