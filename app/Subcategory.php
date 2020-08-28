<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Subcategory extends Model
{   
    protected $table = 'subcategories';

    protected $fillable = [
        'name', 'id',
    ];
    
    public function product()
    {
        return $this->hasMany(Product::class);
    }
 
}
