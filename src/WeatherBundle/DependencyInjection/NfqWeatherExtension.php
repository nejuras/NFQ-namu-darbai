<?php

namespace Nfq\WeatherBundle\DependencyInjection;

use Symfony\Component\Config\FileLocator;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\Extension\Extension;
use Symfony\Component\DependencyInjection\Loader\YamlFileLoader;
use Nfq\WeatherBundle\WeatherProviderInterface;

class NfqWeatherExtension extends Extension
{
    public function load(array $configs, ContainerBuilder $container)
    {
        $configuration = new Configuration();
        $config = $this->processConfiguration($configuration, $configs);
//var_dump($config['providers']['delegating']['providers']);

        $loader = new YamlFileLoader($container, new FileLocator(__DIR__.'/../Resources/config'));
        $loader->load('providers.yaml');
        //var_dump($loader);

        $container->setAlias(WeatherProviderInterface::class, 'nfq_weather.provider.openweathermap');

        $container->setParameter('providers.openweathermap.api_key', '1000');
       // $container->getDefinition('nfq_weather.provider.openweathermap')->setArgument('0', 'providers.openweathermap.api_key');
        //var_dump($container);

        if (isset($config['providers']['openweathermap']['api_key'])) {
            $container->getDefinition('nfq_weather.provider.openweathermap')
                ->replaceArgument(0, $config['providers']['openweathermap']['api_key']);

        }
        /*$delegatingProviders =  $config['providers']['delegating']['providers'];
        foreach ($delegatingProviders as $delegatingProvider) {
            var_dump($delegatingProvider);
        }

        if (isset($config['providers']['delegating']['providers'])) {
            $container->getDefinition('nfq_weather.provider.delegating')
                ->replaceArgument(0, $config['providers']['delegating']['providers']['yahoo']);

        }*/

    }
}
