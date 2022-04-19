<?php

namespace AngelDevil\Callbacks;

require_once("Subject.php");

class PhraseCallback implements Subject
{
    private array $callbackObservers;

    public function addObserver($callback)
    {
        $this->callbackObservers[] = $callback;
    }

    public function notifyObservers()
    {
        foreach ($this->callbackObservers as $callbackObserver) {
            echo $callbackObserver();
            echo "\n\r";
        }
    }

    public function ask(string $question)
    {
        echo $question . "\n\r";
        $this->notifyObservers();
    }
}