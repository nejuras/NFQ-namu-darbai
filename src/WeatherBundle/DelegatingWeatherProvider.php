<?php

namespace Nfq\WeatherBundle;

class DelegatingWeatherProvider
{
    public $providers = array();

    public function __construct(array $providers)
    {
        $this->providers = $providers;
    }

    /**
     * @param Location $location
     * @return Weather
     * @throws WeatherProviderException
     */
    public function fetch(Location $location): Weather
    {
        foreach ($this->providers as $provider) {
            try {
                return $provider->fetch($location);
            } catch (WeatherProviderException $e) {
            }
        }
        throw new WeatherProviderException('No Delegating Weather Provider!');
    }
}