<?php

class Animal
{
    private string $name;

    private float $size;

    private bool $carnivorous = false;
    private int $pawNumber;

    private string $threatenedLevel = "NE";


    public function __construct(string $name, int $pawNumber)
    {
        $this->name = $name;
        $this->setPawNumber($pawNumber);
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getSize(): float
    {
        return $this->size;
    }

    public function setSize(int $size): void
    {
        if ($size < 0) {
            $size = 0;
        }
        $this->size = $size;
    }

    public function isCarnivorous(): bool
    {
        return $this->carnivorous;
    }

    public function setCarnivorous(bool $carnivorous): void
    {
        $this->carnivorous = $carnivorous;
    }

    public function getPawNumber(): int
    {
        return $this->pawNumber;
    }

    private function setPawNumber(int $pawNumber): void
    {
        if ($pawNumber < 0) {
            $pawNumber = 0;
        }
        $this->pawNumber = $pawNumber;
    }

    public function getThreatenedLevel(): string
    {
        return $this->threatenedLevel;
    }

    public function setThreatenedLevel(string $level): void
    {
        $this->threatenedLevel = $level;
    }

    public function speak(string $lang = 'fr'): string
    {
        if ($lang === 'fr') {
            $message = 'Bienvenue au zoo, je suis un ';
        } else {
            $message = 'Welcome to the zoo, I\'am a ';
        }

        return $message . $this->name;
    }

    public function isDangerous(): bool
    {
        return $this->size > 50 && $this->carnivorous === true;
    }

}
