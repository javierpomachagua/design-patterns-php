<?php
namespace AngelDevil\InnerClasses;

require_once("AngelListener.php");
require_once("DevilListener.php");
require_once("Phrase.php");

$phrase = new Phrase();
$phrase->addObserver(new AngelListener());
$phrase->addObserver(new DevilListener());
$phrase->ask("¿Debo hacerlo?");