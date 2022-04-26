<?php

namespace PizzaFactory;


class SimplePizzaFactory
{
    public Pizza $pizza;

    public function createPizza(string $type): Pizza
    {
        if ($type === 'cheese') {
            $this->pizza = new CheesePizza();
        }

        if ($type === 'greek') {
            $this->pizza = new GreekPizza();
        }

        if ($type === 'pepperoni') {
            $this->pizza = new PepperoniPizza();
        }

        return $this->pizza;
    }
}