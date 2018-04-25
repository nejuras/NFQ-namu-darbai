<?php

namespace Nfq\WeatherBundle;

class DelegateWeatherProvider
{
    public $providers;
    public function __construct(array $providers)
    {
        $this->providers = $providers;
        var_dump($providers);
    }
    /**
     * @param Location $location
     * @return Weather
     * @throws WeatherProviderException
     */
    public function fetch(Location $location) : Weather {
        foreach ($this->providers as $provider) {
            try {
                return $provider->fetch($location);
            } catch (WeatherProviderException $e) {
            }
        }
        throw new WeatherProviderException('nera oro duomenu sioje teritorijoje');
    }
}


