<?php

namespace Duck;

class DuckCall
{
    public QuackBehavior $quackBehavior;

    public function __construct()
    {
        $this->quackBehavior = new MimicQuack();
    }

    public function performQuack()
    {
        return $this->quackBehavior->quack();
    }

}