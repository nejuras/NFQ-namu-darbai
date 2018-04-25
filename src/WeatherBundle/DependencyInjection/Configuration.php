<?php

namespace Nfq\WeatherBundle\DependencyInjection;

use Symfony\Component\Config\Definition\Builder\TreeBuilder;
use Symfony\Component\Config\Definition\ConfigurationInterface;

class Configuration implements ConfigurationInterface
{
    public function getConfigTreeBuilder()
    {
        $treeBuilder = new TreeBuilder();
        $rootNode = $treeBuilder->root('nfq_weather');

        // Here you should define the parameters that are allowed to
        // configure your bundle. See the documentation linked above for
        // more information on that topic.
        $rootNode
            ->children()
                ->scalarNode('provider')
                    ->defaultValue('delegating')
                ->end()
                    ->arrayNode('providers')
                        ->children()
                            ->arrayNode('openweathermap')
                                ->children()
                                    ->scalarNode('api_key')->end()
                                ->end()
                            ->end() //openweathermap
                            ->arrayNode('delegating')
                                ->children()
                                    ->arrayNode('providers')
                                        ->children()
                                            ->scalarNode(0)->end()
                                            ->scalarNode(1)->end()
                                        ->end()
                                    ->end() //providers)
                                ->end()
                            ->end() //delegating
                        ->end()
                    ->end() //providers

            ->end()
            ;
//var_dump($rootNode);
        return $treeBuilder;
    }
}
