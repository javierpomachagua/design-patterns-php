<?php

namespace Duck;

class FlyRocketPowered implements FlyBehavior
{
    public function fly(): string
    {
        return "I'm flying with a rocket!";
    }
}