<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = ['category_id',
    'name','price','stock','image'];

    public function category ()
    {
        return $this->belongsTo
        (category::class);
        
    }

    public function orders()
    {
        return $this->hasMany
        (Order::class);
    }
        
    }

