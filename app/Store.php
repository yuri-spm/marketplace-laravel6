<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Store extends Model
{
    // 1 para 1 -> 1 loja  pertence a  1 usuario
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    // 1 para N -> 1 loja  para N produtos
    public function products()
    {
        return $this->hasMany(Product::class);
    }
}
