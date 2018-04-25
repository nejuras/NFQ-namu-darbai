<?php

namespace Nfq\WeatherBundle;

class OpenWeatherMapWeatherProvider implements WeatherProviderInterface
{
    private $apiKey;

    public function __construct(string $apiKey)
    {
        $this->apiKey = $apiKey;
        var_dump($apiKey);
    }

    /**
     * {@inheritdoc}
     */
    public function fetch(Location $location): Weather
    {
        // TODO: Implement this
       // return new Weather(24.1);
        $url = "http://api.openweathermap.org/data/2.5/weather?lat={$location->lat}&lon={$location->lon}&appid=" . $this->apiKey;
        $json = file_get_contents($url);
        $data = json_decode($json);

        if ( ( json_last_error() ) || ( !$this->apiKey ) ) {
            throw new WeatherProviderException('klaida');
        }
        $temperature = $data->main->temp;
        //var_dump($data->main);
       // $temperature_type = 'K';
        //$providerName = 'Open Weather Map';
        return new Weather($temperature);
    }
}
