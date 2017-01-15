<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Dog extends Model
{
    function dogsRequiringAntiRabbitBiteShot(){
        return $this->ageGreaterThan(6);
    }

    function scopeAgeGreaterThan($query, $age) {
        return $query->where('age', '>', $age);
    }
}
