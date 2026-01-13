<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable = [ 
        'amount',
        'status',
        'orderable_id',
        'orderable_type',
    ];

    public function user()
    {
        return $this->belongsTo(User::class); // La commande appartient à un utilisateur
    }

    public function orderable()
    {
        return $this->morphTo(); // L'ordre "appartient" à ProductOrder ou SubscriptionOrder
    }
}
