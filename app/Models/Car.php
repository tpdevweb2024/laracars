<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    use HasFactory;

    public function owner()
    {
        // Cette voiture appartient à un propriétaire
        return $this->belongsTo(Owner::class);
    }
}
