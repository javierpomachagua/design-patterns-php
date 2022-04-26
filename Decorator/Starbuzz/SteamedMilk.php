<?php

namespace Starbuzz;

class SteamedMilk extends CondimentDecorator
{

    public function __construct(Beverage $beverage)
    {
        $this->beverage = $beverage;
    }

    public function getDescription(): string
    {
        return $this->beverage->getDescription() . ', Steamed Milk';
    }

    public function cost(): float
    {
        return $this->beverage->cost() + .10;
    }
}