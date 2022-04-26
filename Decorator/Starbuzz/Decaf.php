<?php

namespace Starbuzz;

class Decaf extends Beverage
{
    public function __construct()
    {
        $this->description = 'Decaf';
    }

    public function cost(): float
    {
        return 1.05;
    }
}