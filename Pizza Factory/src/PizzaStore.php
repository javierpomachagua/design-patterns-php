<?php

namespace PizzaFactory;

abstract class PizzaStore
{
    public Pizza $pizza;
//    public SimplePizzaFactory $simplePizzaFactory;
//
//    public function __construct(SimplePizzaFactory $simplePizzaFactory)
//    {
//        $this->simplePizzaFactory = $simplePizzaFactory;
//    }

    public function orderPizza(string $type): Pizza
    {
        $this->pizza = $this->createPizza($type);

        $this->pizza->prepare();
        $this->pizza->bake();
        $this->pizza->cut();
        $this->pizza->box();

        return $this->pizza;

    }

    abstract protected function createPizza(string $type);
}