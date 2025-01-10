<?php

include_once '../utils/autoloader.php';

$dog = new Chien();

echo $dog->info();
echo $dog->infoPlus();
echo $dog->crie();

echo $dog->propDisplay(0, 10, 124);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html>