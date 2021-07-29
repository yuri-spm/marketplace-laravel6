<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    // 1 para N -> 1 loja para 1 produtos
    public function store()
    {
        return $this->belongsTo(Store::class);
    }
}
