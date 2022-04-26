<?php

namespace Starbuzz;

abstract class CondimentDecorator extends Beverage
{
    public Beverage $beverage;

    public function getSize(): Size
    {
        return $this->beverage->getSize();
    }
}