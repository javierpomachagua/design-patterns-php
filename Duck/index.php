<?php

use Duck\DuckCall;
use Duck\FlyRocketPowered;
use Duck\MallarDuck;
use Duck\ModelDuck;

require("vendor/autoload.php");

//$mallarDuck = new MallarDuck();
//echo $mallarDuck->performQuack();
//echo "\r\n";
//echo $mallarDuck->performFly();<

//$modelDuck = new ModelDuck();
//echo $modelDuck->performFly();
//$modelDuck->setFlyBehavior(new FlyRocketPowered());
//echo "\r\n";
//echo $modelDuck->performFly();

$duckCall = new DuckCall();
echo $duckCall->performQuack();