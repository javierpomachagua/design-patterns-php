<?php

namespace AngelDevil\InnerClasses;

require_once("Observer.php");

class DevilListener implements Observer
{
    public function saySomething(): string
    {
        return "Come on, do it!\n\r";
    }
}