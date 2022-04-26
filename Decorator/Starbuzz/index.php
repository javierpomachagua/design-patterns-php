<?php

namespace Starbuzz;

require_once("Beverage.php");
require_once("Espresso.php");
require_once("DarkRoast.php");
require_once("HouseBlend.php");
require_once("Mocha.php");
require_once("Soy.php");
require_once("Whip.php");
require_once("Size.php");

$beverage = new Espresso();
$beverage->size = Size::VENTI;
echo $beverage->getDescription() . ' - $'. $beverage->cost() . "\n\r";

$beverage2 = new DarkRoast();
$beverage2->size = Size::VENTI;
$beverage2 = new Mocha($beverage2);
$beverage2 = new Mocha($beverage2);
$beverage2 = new Whip($beverage2);
echo $beverage2->getDescription() . ' - $'. $beverage2->cost() . "\n\r";

$beverage3 = new HouseBlend();
$beverage3->size = Size::VENTI;
$beverage3 = new Soy($beverage3);
$beverage3 = new Mocha($beverage3);
$beverage3 = new Whip($beverage3);
echo $beverage3->getDescription() . ' - $'. $beverage3->cost() . "\n\r";