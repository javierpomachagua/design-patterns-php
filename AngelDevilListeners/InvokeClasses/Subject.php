<?php

namespace AngelDevil\InvokeClasses;

interface Subject
{
    public function addObserver($class);
    public function notifyObservers();
}