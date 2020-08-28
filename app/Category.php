<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{   
    protected $table = 'categories';

    protected $fillable = [
        'name', 'id',
    ];
    
    public function product()
    {
        return $this->hasMany(Product::class);
    }

    public function subcategory()
    {
        return $this->hasMany(Subcategory::class);
    }

    
}
