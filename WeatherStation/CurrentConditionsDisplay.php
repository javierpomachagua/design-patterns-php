<?php
namespace WeatherStation;

require_once('WeatherData.php');
require_once('DisplayElement.php');
require_once('Observer.php');

class CurrentConditionsDisplay implements Observer, DisplayElement
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
        echo "CC Display - ";
        echo "Current conditions: " . $this->temperature . "F degrees and " . $this->humidity . "% humidity";
        echo "\n\r";
    }

    public function update(float $temperature, float $humidity, float $pressure)
    {
        $this->temperature = $temperature;
        $this->humidity = $humidity;
        $this->display();
    }
}