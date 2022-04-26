<?php

namespace Starbuzz;

abstract class Beverage
{
    public string $description = "Unknown Beverage";
    public Size $size;

    public function getDescription(): string
    {
        return $this->description;
    }

    abstract public function cost(): float;

    /**
     * @return Size
     */
    public function getSize(): Size
    {
        return $this->size;
    }

    /**
     * @param Size $size
     */
    public function setSize(Size $size): void
    {
        $this->size = $size;
    }

}