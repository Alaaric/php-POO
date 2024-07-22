<?php

namespace App\Animal;

use App\Flyable;

class Parrot extends Bird implements Flyable
{
    public function fly()
    {
        return "yes";
    }

}