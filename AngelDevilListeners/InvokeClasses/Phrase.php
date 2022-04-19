<?php

namespace AngelDevil\InvokeClasses;

require_once("Subject.php");

class Phrase implements Subject
{
    private array $invokeClassesObservers;

    public function addObserver($class)
    {
        $this->invokeClassesObservers[] = $class;
    }

    public function notifyObservers()
    {
        foreach ($this->invokeClassesObservers as $invokeClassObserver) {
            echo $invokeClassObserver();
        }
    }

    public function ask(string $question)
    {
        echo $question . "\n\r";
        $this->notifyObservers();
    }
}