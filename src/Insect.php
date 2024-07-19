<?php

namespace App;
final class Insect extends Arthropode
{
    private $pawNumver = 6;

    public function __construct(string $name)
    {
        parent::__construct($name, $this->pawNumver);
    }
}