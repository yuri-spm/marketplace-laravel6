<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{

    protected  $fillable = ['name', 'description', 'body', 'price', 'slug'];

    // 1 para 1 -> 1 loja para 1 produtos
    public function store()
    {
        return $this->belongsTo(Store::class);
    }

    // N para N -> N produtos para N categorias
    public function categories()
    {
        return $this->belongsToMany(Category::class);
    }


}
