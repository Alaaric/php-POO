<?php

namespace App;
final class Snake extends Reptile
{
    protected bool $carnivorous = true;
    private $pawNumver = 0;

    public function __construct(string $name)
    {
        parent::__construct($name, $this->pawNumver);
    }
}