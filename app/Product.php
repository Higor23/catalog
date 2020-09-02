<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = 'products';

    protected $fillable = [
        'name',
        'category_id',
        'subcategory_id',
        'tag_id',
        'description',
        'image01',
        'image02',
        'image03',
        
    ];

    public function category()
    {
        return $this->belongsTo(Category::class);

    }

    public function subcategory()
    {
        return $this->belongsTo(Subcategory::class);

    }
    
    public function tag()
    {
        return $this->belongsTo(Tag::class);

    }
}
