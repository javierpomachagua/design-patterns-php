<?php

namespace Starbuzz;

require_once("Size.php");

class Soy extends CondimentDecorator
{
    public function __construct(Beverage $beverage)
    {
        $this->beverage = $beverage;
    }

    public function getDescription(): string
    {
        return $this->beverage->getDescription() . ', Soy';
    }

    public function cost(): float
    {
        $cost = $this->beverage->cost();

        if (Size::TALL === $this->beverage->getSize()) {
            $cost += .10;
        } else if (Size::GRANDE === $this->beverage->getSize()) {
            $cost += .15;
        } else if (Size::VENTI === $this->beverage->getSize()) {
            $cost += .20;
        }
        return $cost;
    }
}