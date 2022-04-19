<?php
namespace Duck;

class FlyNoWay implements FlyBehavior
{
    public function fly(): string
    {
        return 'Can not Fly';
    }
}