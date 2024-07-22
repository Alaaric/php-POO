<?php

namespace App\Area;

use App\Animal\Animal;
use App\Area\Area;

class Box extends Area
{
    public function isValid(Animal $animal): bool
    {
        return $animal->getSize() < 50;
    }
}