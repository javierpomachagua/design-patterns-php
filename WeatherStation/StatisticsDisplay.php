<?php

namespace WeatherStation;

require_once('WeatherData.php');
require_once('DisplayElement.php');
require_once('Observer.php');

class StatisticsDisplay implements Observer, DisplayElement
{
    private float $temperature;
    private float $humidity;
    private float $pressure;
    private WeatherData $weatherData;

    public function __construct(WeatherData $weatherData)
    {
        $this->weatherData = $weatherData;
        $this->weatherData->registerObserver($this);
    }

    public function display()
    {
        echo "SS Display - ";
        echo "Current conditions: " . $this->temperature . "F degrees and " . $this->pressure . " pressure";
        echo "\n\r";
    }

    public function update()
    {
        $this->temperature = $this->weatherData->getTemperature();
        $this->pressure = $this->weatherData->getPressure();
        $this->display();
    }

}