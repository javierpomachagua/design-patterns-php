<?php

namespace AngelDevil\InvokeClasses;

require_once("Observer.php");

class DevilListener implements Observer
{
    public function saySomething(): string
    {
        return "Come on, do it!\n\r";
    }

    public function __invoke()
    {
        return $this->saySomething();
    }
}