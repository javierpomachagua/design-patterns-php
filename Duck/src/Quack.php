<?php

namespace Duck;

class Quack implements QuackBehavior
{
    public function quack(): string
    {
        return 'Quack that really quack';
    }
}