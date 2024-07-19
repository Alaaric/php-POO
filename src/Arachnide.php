<?php

namespace App;
class Arachnide extends Arthropode
{
    private $pawNumver = 8;

    public function __construct(string $name)
    {
        parent::__construct($name, $this->pawNumver);
    }
}