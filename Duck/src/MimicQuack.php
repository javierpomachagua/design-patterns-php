<?php

namespace Duck;

class MimicQuack implements QuackBehavior
{
    public function quack(): string
    {
        return 'Mimic Quack';
    }
}