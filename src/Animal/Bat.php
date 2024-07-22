<?php

namespace App\Animal;

use App\Animal\Mammal;
use App\Flyable;

class Bat extends Mammal implements Flyable
{

    public function fly()
    {
        return "yes";
    }
}