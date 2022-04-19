<?php

namespace AngelDevil\InnerClasses;

require_once("Subject.php");
require_once("Observer.php");

class Phrase implements Subject
{
    private array $observers;

    public function notifyObservers()
    {
        foreach ($this->observers as $observer) {
            echo $observer->saySomething();
        }
    }

    public function addObserver(Observer $observer)
    {
        $this->observers[] = $observer;
    }

    public function ask(string $question)
    {
        echo $question . "\n\r";
        $this->notifyObservers();
    }
}