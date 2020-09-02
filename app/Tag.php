<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{   
    protected $table = 'tags';

    protected $fillable = [
        'name', 'id',
    ];
    
    public function product()
    {
        return $this->hasMany(Product::class);
    }
    
}
