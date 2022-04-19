<?php

namespace Duck;

abstract class Duck
{
    public FlyBehavior   $flyBehavior;
    public QuackBehavior $quackBehavior;

    public function performQuack()
    {
        return $this->quackBehavior->quack();
    }

    public function performFly()
    {
        return $this->flyBehavior->fly();
    }

    public function setFlyBehavior(FlyBehavior $flyBehavior)
    {
        $this->flyBehavior = $flyBehavior;
    }

    public function setQuackBehavior(QuackBehavior $quackBehavior)
    {
        $this->quackBehavior = $quackBehavior;
    }

    public function swim()
    {
        return 'All ducks float, even decoys!';
    }

    abstract function display();

}