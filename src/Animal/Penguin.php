<?php

namespace App\Animal;

use App\Swimmable;

class Penguin extends Bird implements Swimmable
{
    public function swim(): string
    {
        return "yes";
    }
}