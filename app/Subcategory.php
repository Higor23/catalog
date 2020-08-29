<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Subcategory extends Model
{   
    protected $table = 'subcategories';

    protected $fillable = [
        'name', 'id',
        'category_id'
    ];
    
    public function product()
    {
        return $this->hasMany(Product::class);
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
 
}
