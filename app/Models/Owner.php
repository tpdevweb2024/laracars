<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Owner extends Model
{
    use HasFactory;

    public function cars()
    {
        // Le propriétaire peut avoir plusieurs voitures
        return $this->hasMany(Car::class);
    }
}
