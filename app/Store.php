<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Padosoft\Sluggable\HasSlug;
use Padosoft\Sluggable\SlugOptions;

class Store extends Model
{
    use HasSlug;
    protected  $fillable = ['name', 'description', 'phone', 'mobile_phone', 'slug', 'logo'];

    /**
     * Get the options for generating the slug.
     */
    public function getSlugOptions(): SlugOptions
    {
        return SlugOptions::create()
            ->generateSlugsFrom('name')
            ->saveSlugsTo('slug');
    }

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
