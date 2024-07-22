<?php

namespace App\Animal;

use App\Animal\Bird;
use App\Flyable;
use App\Swimmable;

class Duck extends Bird implements Flyable, Swimmable
{

    public function fly()
    {
        return "yes";
    }

    public function swim(): string
    {
        return "yes";
    }
}