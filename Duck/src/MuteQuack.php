<?php

namespace Duck;

class MuteQuack implements QuackBehavior
{
    public function quack(): string
    {
        return 'Silence';
    }
}