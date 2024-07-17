<?php

/***************************************/
/******** ⚠️ WORK HERE ONLY ⚠️ ***********/

require __DIR__ . '/../src/Animal.php';

$lion = new Animal();
$lion->name = 'lion';
$lion->carnivorous = true;
$lion->pawNumber = 4;
$lion->size = 50;
$lion->threatenedLevel = "VU";


$parrot = new Animal();
$parrot->name = 'parrot';
$parrot->pawNumber = 2;
$parrot->size = 10;
$parrot->threatenedLevel = "LC";

$animals = [$lion, $parrot];

/***************************************/
/***************************************/


// Do not modify code below
require 'view.php';
?>