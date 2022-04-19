<?php
namespace WeatherStation;

interface Observer
{
    public function update(float $temperature, float $humidity, float $pressure);
}