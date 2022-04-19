<?php
namespace Duck;

class FlyWithWings implements FlyBehavior
{
    public function fly(): string
    {
        return "I'm flying";
    }
}