<?php
namespace AngelDevil\InvokeClasses;

require_once("Phrase.php");
require_once("AngelListener.php");
require_once("DevilListener.php");

$phraseCallback = new Phrase();
$phraseCallback->addObserver(new AngelListener());
$phraseCallback->addObserver(new DevilListener());
$phraseCallback->ask("¿Lo hago?");