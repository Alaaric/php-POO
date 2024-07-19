<?php

namespace App;

use App\Animal\Animal;
use App\Area\Area;

class cage extends Area
{
    public function isValid(Animal $animal): bool
    {
        return $animal->isDangerous();
    }
}