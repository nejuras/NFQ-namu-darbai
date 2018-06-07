<?php

namespace Nfq\WeatherBundle\DependencyInjection;

use Symfony\Component\Config\FileLocator;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\Extension\Extension;
use Symfony\Component\DependencyInjection\Loader\YamlFileLoader;
use Nfq\WeatherBundle\WeatherProviderInterface;
use Symfony\Component\DependencyInjection\Reference;

class NfqWeatherExtension extends Extension
{
    public function load(array $configs, ContainerBuilder $container)
    {
        $configuration = new Configuration();
        $config = $this->processConfiguration($configuration, $configs);
//        var_dump($config['providers']['delegating']['providers']);

        $loader = new YamlFileLoader($container, new FileLocator(__DIR__.'/../Resources/config'));
        try {
            $loader->load('providers.yaml');
        } catch (\Exception $e) {
        }

//        $container->setAlias(WeatherProviderInterface::class, 'nfq_weather.provider.openweathermap');

//        $container->setParameter('providers.openweathermap.apikey', '0');
//        $container->setParameter('nfq_weather.provider.delegating', '0');
//        $container->setParameter('nfq_weather.provider.yahoo', '0');
//        $container->setParameter('nfq_weather.provider.openweathermap', '0');

        if (isset($config['providers']['openweathermap']['api_key'])) {
            $container->getDefinition('nfq_weather.provider.openweathermap')
                ->replaceArgument(0, $config['providers']['openweathermap']['api_key']);
        }

        if (isset($config['providers']['delegating']['providers'])) {
            $container->getDefinition('nfq_weather.provider.delegating')
               ->replaceArgument(0, $config['providers']['delegating']['providers']);
            $providers = [];

            foreach ($config['providers']['delegating']['providers'] as $provider){
                $providers[] = new Reference('nfq_weather.provider.'.$provider);
            }
            $container->getDefinition('nfq_weather.provider.delegating')
                ->replaceArgument(0, $providers);
        }
        $container->setAlias(WeatherProviderInterface::class, 'nfq_weather.provider.'.$config['provider']);

    }
}