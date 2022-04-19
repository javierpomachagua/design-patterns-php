<?php

namespace Duck;

class MallarDuck extends Duck
{
    public function __construct()
    {
        $this->flyBehavior = new FlyWithWings();
        $this->quackBehavior = new Quack();
    }

    public function display()
    {
        return "I'm a real Mallar duck";
    }
}