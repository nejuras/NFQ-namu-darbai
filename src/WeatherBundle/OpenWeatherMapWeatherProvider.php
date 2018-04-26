<?php

namespace Nfq\WeatherBundle;

class OpenWeatherMapWeatherProvider implements WeatherProviderInterface
{
    private $apiKey;

    public function __construct(string $apiKey)
    {
        $this->apiKey = $apiKey;
    }

    /**
     * {@inheritdoc}
     */
    public function fetch(Location $location): Weather
    {
        $url = "http://api.openweathermap.org/data/2.5/weather?lat={$location->lat}&lon={$location->lon}&appid=" . $this->apiKey;
        $json = file_get_contents($url);

        $data = json_decode($json, true);

        if ( ( json_last_error() ) || ( !$this->apiKey ) ) {
            throw new WeatherProviderException('error');
        }
        $temperature = $data['main']['temp'];
        return new Weather($temperature);
    }
}
