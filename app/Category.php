<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Padosoft\Sluggable\HasSlug;
use Padosoft\Sluggable\SlugOptions;

class Category extends Model
{
    use HasSlug;
    protected  $fillable = ['name', 'description', 'slug'];

    /**
     * Get the options for generating the slug.
     */
    public function getSlugOptions(): SlugOptions
    {
        return SlugOptions::create()
            ->generateSlugsFrom('name')
            ->saveSlugsTo('slug');
    }

    // N para N -> N produtos para N categorias
    public function products()
    {
        return $this->belongsToMany(Product::class);
    }
}
