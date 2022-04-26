<?php
namespace WeatherStation;

require_once("Subject.php");

class WeatherData implements Subject
{
    private array $observers;
    private float $temperature;
    private float $humidity;
    private float $pressure;

    public function __construct()
    {
    }

    public function registerObserver(Observer $observer)
    {
        $this->observers[] = $observer;
    }

    public function removeObserver(Observer $observer)
    {
        $key = array_search($observer, $this->observers);

        array_splice($this->observers, $key, 1);
    }

    public function notifyObservers()
    {
        foreach ($this->observers as $observer)
        {
            $observer->update();
        }
    }

    public function measurementsChanged()
    {
        $this->notifyObservers();
    }

    public function setMeasurements(float $temperature, float $humidity, float $pressure)
    {
        $this->temperature = $temperature;
        $this->humidity = $humidity;
        $this->pressure = $pressure;
        $this->measurementsChanged();
    }

    /**
     * @return float
     */
    public function getTemperature(): float
    {
        return $this->temperature;
    }

    /**
     * @return float
     */
    public function getHumidity(): float
    {
        return $this->humidity;
    }

    /**
     * @return float
     */
    public function getPressure(): float
    {
        return $this->pressure;
    }
}