<?php

include_once '../utils/autoloader.php';

$machine = new MachineACafe("Ta soeur elle bat le beurre", 0);

echo $machine->allumage(0);
echo $machine->mettreUneDosette();
echo $machine->faireDuCafe() ;