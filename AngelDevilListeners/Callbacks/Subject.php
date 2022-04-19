<?php

namespace AngelDevil\Callbacks;

interface Subject
{
    public function addObserver($callback);
    public function notifyObservers();
}