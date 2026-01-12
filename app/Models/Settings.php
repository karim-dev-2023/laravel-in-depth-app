<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Settings extends Model
{
    protected $fillable = ['theme', 'lang'];

    // Relation pour la table User
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
