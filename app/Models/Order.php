<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable =[
        'transaction','product_id',
        'payment_status'
    ];

    public function product()
    {
        return $this->belongsTo
        (Product::class);
    }

}
