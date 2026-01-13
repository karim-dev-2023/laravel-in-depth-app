<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProductOrder extends Model
{
    protected $fillable = [
        'name',
        'price',
    ];

    public function orders()
    {
        return $this->morphMany(Order::class, 'orderable'); 
    }
}
