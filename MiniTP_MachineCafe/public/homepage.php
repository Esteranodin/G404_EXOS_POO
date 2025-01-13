<?php

include_once '../utils/autoloader.php';

$machine = new MachineACafe("De'longhi");

$machine->allumage();
$machine->mettreUneDosette(2);

// en paramètre = morceau(x) de sucre
echo $machine->faireDuCafe(2) ;


?>


<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../style.css">
    <script defer src="../script.js"></script>    
</head>

<body>
<div class="container">
    <div class="coffeHeader">
      <div class="coffeHeaderButtons coffeHeaderButtons1"></div>
      <div class="coffeHeaderButtons coffeHeaderButtons2"></div>
      
      <div class="coffeHeaderDisplay"> 
      <form method="post">
      <input class="hidden coffeHeaderDisplay" name="onOff" id="onOff" type="submit" value="true">
          </div>
      </form>

      <div class="coffeHeaderDetails"></div>
    </div>
    <div class="coffeeMiddle">
      <div class="coffeePerco"></div>
      <div class="coffeeArm"></div>
      <div id="liquid" class=""></div>
      <article id="smoke">
      <div class="coffeeSmoke-one"></div>
      <div class="coffeeSmoke-two"></div>
      <div class="coffeeSmoke-three"></div>
      <div class="coffeeSmoke-for"></div>
    </article>
      <div class="coffeeCup"></div>
    </div>
    <div class="coffeeFooter"></div>
  </div>
</body>
</html>

<?php




?>