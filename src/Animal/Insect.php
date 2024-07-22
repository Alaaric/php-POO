<?php

namespace App\Animal;

use App\Flyable;

class Insect extends Arthropode implements Flyable
{
    private int $pawNumber = 6;

    public function __construct(string $name)
    {
        parent::__construct($name, $this->pawNumber);
    }

    public function fly(): string
    {
        return "yes";
    }
}