<?php

namespace App\Controller;

use Nfq\WeatherBundle\Location;
use Nfq\WeatherBundle\WeatherProviderInterface;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Nfq\WeatherBundle\DelegateWeatherProvider;
use Symfony\Component\Routing\Annotation\Route;

class WeatherController extends Controller
{
    /**
     * @var WeatherProviderInterface
     * @Route("/r", name="weatherprovider")
     */
    private $provider;

    public function __construct(WeatherProviderInterface $provider)
    {
        $this->provider = $provider;
        var_dump($provider);
    }

    public function index(): Response
    {
        $markdownTransformer = $this->get('nfq_weather.provider.openweathermap');
        //var_dump($markdownTransformer);
       // $DelegateWeatherProvider = new DelegateWeatherProvider(array($YahooWeatherProvider, $OpenWeatherMap));
        $location = new Location(54.6872, 25.2797);
        $weather = $this->provider->fetch($location);

        //return new Response(sprintf('Current temperature: %f', $weather->getTemperature()));
        return $this->render('home/index.html.twig', [
            'current_temperature' => $weather->getTemperature(),
        ]);
    }
}
