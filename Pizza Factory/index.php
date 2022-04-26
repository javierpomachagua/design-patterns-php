<?php

use PizzaFactory\ChicagoStylePizzaStore;
use PizzaFactory\NYStylePizzaStore;

require("vendor/autoload.php");

$nyStore = new NYStylePizzaStore();
$chicagoStore = new ChicagoStylePizzaStore();

$ethanPizza = $nyStore->orderPizza('cheese');
echo "Ethan ordered a {$ethanPizza->getName()} \n\r";

echo "\n\r";

$joelPizza = $chicagoStore->orderPizza('cheese');
echo "Joel ordered a {$joelPizza->getName()} \n\r";