<?php

namespace WeatherStation;

require_once('WeatherData.php');
require_once('DisplayElement.php');
require_once('Observer.php');

class HeatIndexDisplay implements DisplayElement, Observer
{
    private float $temperature;
    private float $humidity;
    private WeatherData $weatherData;

    public function __construct(WeatherData $weatherData)
    {
        $this->weatherData = $weatherData;
        $this->weatherData->registerObserver($this);
    }

    public function display()
    {
        $index = ((16.923 + (0.185212 * $this->temperature) + (5.37941 * $this->humidity) - (0.100254 * $this->temperature * $this->humidity) +
            (0.00941695 * ($this->temperature * $this->temperature)) + (0.00728898 * ($this->humidity * $this->humidity)) +
            (0.000345372 * ($this->temperature * $this->temperature * $this->humidity)) - (0.000814971 * ($this->temperature * $this->humidity * $this->humidity)) +
            (0.0000102102 * ($this->temperature * $this->temperature * $this->humidity * $this->humidity)) - (0.000038646 * ($this->temperature * $this->temperature * $this->temperature)) + (0.0000291583 *
                ($this->humidity * $this->humidity * $this->humidity)) + (0.00000142721 * ($this->temperature * $this->temperature * $this->temperature * $this->humidity)) +
            (0.000000197483 * ($this->temperature * $this->humidity * $this->humidity * $this->humidity)) - (0.0000000218429 * ($this->temperature * $this->temperature * $this->temperature * $this->humidity * $this->humidity)) +
            0.000000000843296 * ($this->temperature * $this->temperature * $this->humidity * $this->humidity * $this->humidity)) -
        (0.0000000000481975 * ($this->temperature * $this->temperature)));

        echo "Heat Index ${index}\n\r";
    }

    public function update(float $temperature, float $humidity, float $pressure)
    {
        $this->temperature = $temperature;
        $this->humidity = $humidity;
        $this->display();
    }
}