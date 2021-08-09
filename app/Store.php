<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Store extends Model
{
    protected  $fillable = ['name', 'description', 'phone', 'mobile_phone', 'slug'];

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
