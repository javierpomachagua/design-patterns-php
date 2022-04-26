<?php

namespace PizzaFactory;

class ChicagoStylePizzaStore extends PizzaStore
{

    public function createPizza(string $type): Pizza
    {
        if ($type === 'cheese') {
            $this->pizza = new ChicagoStyleCheesePizza();
        }

        if ($type === 'pepperoni') {
            $this->pizza = new ChicagoStylePepperoniPizza();
        }

        if ($type === 'clam') {
            $this->pizza = new ChicagoStyleClamPizza();
        }

        if ($type === 'veggie') {
            $this->pizza = new ChicagoStyleVeggiePizza();
        }

        return $this->pizza;
    }
}