<?php

namespace Nfq\WeatherBundle;

class DelegatingWeatherProvider
{
    public $providers;
    public function __construct(array $providers)
    {
        $this->providers = $providers;
        //var_dump($this->providers);
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
        throw new WeatherProviderException('No Weather Provider!');
    }
}


