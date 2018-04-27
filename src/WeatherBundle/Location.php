<?php

namespace Nfq\WeatherBundle;

class Location
{
    /**
     * @var float
     */
    public $lat;

    /**
     * @var float
     */
    public $lon;

    public function __construct(float $lat, float $lon)
    {
        $this->lat = $lat;
        $this->lon = $lon;
    }

    public function getLat(): float
    {
        return $this->lat;
    }

    public function getLon(): float
    {
        return $this->lon;
    }
}