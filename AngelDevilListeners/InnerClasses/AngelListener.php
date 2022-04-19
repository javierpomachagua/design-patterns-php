<?php

namespace AngelDevil\InnerClasses;

require_once("Observer.php");

class AngelListener implements Observer
{
    public function saySomething(): string
    {
        return "Don't do it, you might regret it!\n\r";
    }
}