<?php

namespace App\Controller;

use Nfq\WeatherBundle\Location;
use Nfq\WeatherBundle\WeatherProviderInterface;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class WeatherController extends Controller
{
    /**
     * @var WeatherProviderInterface
     */
    private $provider;

    public function __construct(WeatherProviderInterface $provider)
    {
        $this->provider = $provider;
//        var_dump($this->provider);
    }

    /**
     * @return Response
     * @throws \Nfq\WeatherBundle\WeatherProviderException
     */
    public function index()
    {
        $location = new Location(54.6872, 25.2797);
        $weather = $this->provider->fetch($location);

        return $this->render('home/index.html.twig', [
            'current_temperature' => $weather->getTemperature(),
        ]);
    }
}