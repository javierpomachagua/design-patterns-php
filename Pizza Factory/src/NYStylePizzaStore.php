<?php

namespace PizzaFactory;

class NYStylePizzaStore extends PizzaStore
{
    public function createPizza(string $type): Pizza
    {
        if ($type === 'cheese') {
            $this->pizza = new NYStyleCheesePizza();
        }

        if ($type === 'pepperoni') {
            $this->pizza = new NYStylePepperoniPizza();
        }

        if ($type === 'clam') {
            $this->pizza = new NYStyleClamPizza();
        }

        if ($type === 'veggie') {
            $this->pizza = new NYStyleVeggiePizza();
        }

        return $this->pizza;
    }
}