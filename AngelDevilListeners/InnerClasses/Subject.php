<?php

namespace AngelDevil\InnerClasses;

interface Subject
{
    public function addObserver(Observer $observer);

    public function notifyObservers();
}