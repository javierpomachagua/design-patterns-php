<?php
namespace AngelDevil\Callbacks;

require_once("PhraseCallback.php");

$phraseCallback = new PhraseCallback();
$phraseCallback->addObserver(fn () => "First callback observers");
$phraseCallback->addObserver(fn () => "Second callback observers");
$phraseCallback->ask("¿Lo hago?");