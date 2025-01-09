<?php

include_once '../utils/autoloader.php';

$dog = new Chien();

echo $dog->info();
echo $dog->infoPlus();
echo $dog->crie();

echo $dog->propDisplay(0, 10, 124);