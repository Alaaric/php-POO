<?php

/***************************************/
/******** ⚠️ WORK HERE ONLY ⚠️ ***********/

require __DIR__ . '/../src/Animal.php';

$lion = new Animal();
$lion->name = 'lion';
$lion->pawNumber = 4;
$lion->carnivorous = true;
$lion->size = 70;
$lion->threatenedLevel = 'VU';
echo $lion->speak('fr');
echo $lion->speak('en');
echo $lion->speak();
echo $lion->isDangerous();

$parrot = new Animal();
$parrot->name = 'parrot';
$parrot->pawNumber = 2;
$parrot->carnivorous = true;
$parrot->size = 30;
echo $parrot->speak('fr');
echo $parrot->speak('en');
echo $parrot->speak();
echo $parrot->isDangerous();

$elephant = new Animal();
$elephant->name = 'elephant';
$elephant->pawNumber = 4;
$elephant->threatenedLevel = 'LC';
echo $elephant->speak('fr');
echo $elephant->speak('en');
echo $elephant->speak();
echo $elephant->isDangerous();

$animals = [$lion, $parrot, $elephant];

/***************************************/
/***************************************/


// Do not modify code below
require 'view.php';
?>