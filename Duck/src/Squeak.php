<?php

namespace Duck;

class Squeak implements QuackBehavior
{
    public function quack(): string
    {
        return 'Quack that squeak';
    }
}