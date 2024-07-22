<?php

namespace App\Area;

use App\Animal\Animal;
use App\Animal\Fish;
use App\Swimmable;

class Aquarium extends Area
{
    public function isValid(Animal $animal): bool
    {
        return $animal instanceof Swimmable;
    }
}