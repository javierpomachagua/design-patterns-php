<?php

namespace PizzaFactory;

abstract class Pizza
{
    public string $name;
    public string $dough;
    public string $sauce;
    public array $toppings;

    public function prepare()
    {
        echo "Preparing {$this->getName()} \n\r";
        echo "Tossing dough ... \n\r";
        echo "Adding sauce ... \n\r";
        echo "Adding toppings ... \n\r";
        foreach ($this->toppings as $topping) {
            echo "$topping \n\r";
        }
    }

    public function bake()
    {
        echo "Bake for 25 minutes at 350 \n\r";
    }

    public function cut()
    {
        echo "Cutting the pizza into diagonal slices \n\r";
    }

    public function box()
    {
        echo "Place pizza in official PizzaStore box \n\r";
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

}