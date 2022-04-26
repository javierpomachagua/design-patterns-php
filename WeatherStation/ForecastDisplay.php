<?php

namespace WeatherStation;

require_once('WeatherData.php');
require_once('DisplayElement.php');
require_once('Observer.php');

class ForecastDisplay implements Observer, DisplayElement
{
    private float $currentPressure = 29.92;
    private float $lastPressure;
    private WeatherData $weatherData;

    public function __construct(WeatherData $weatherData)
    {
        $this->weatherData = $weatherData;
        $this->weatherData->registerObserver($this);
    }

    public function update()
    {
        $this->currentPressure = $this->weatherData->getPressure();

        $this->display();
    }

    public function display()
    {
        echo "Pressure: " . $this->currentPressure . "\n\r";
    }
}