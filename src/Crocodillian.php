<?php

namespace App;
final class Crocodillian extends Reptile
{
    protected bool $carnivorous = true;
    private $pawNumver = 4;

    public function __construct(string $name)
    {
        parent::__construct($name, $this->pawNumver);
    }
}
